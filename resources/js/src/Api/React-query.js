import {
    useMutation,
    useQuery,
    useQueryClient,
} from '@tanstack/react-query';
import AxiosServices from '../services/Axios-services';
import { AxiosError } from 'axios';
export const fetcher = ({ queryKey, pageParam }, instance, method) => {
    const [url, params] = queryKey;
    const api = AxiosServices[instance]
    return api(url, { method: method || "GET", params: { ...params, pageParam } })
        .then((res) => res.data);
};

export const useFetch = ({
    url,
    params,
    instance,
    method,
    ...config
}) => {
    const context = useQuery(
        [url, params],
        ({ queryKey, ...otherProps }) => fetcher({ queryKey, ...otherProps }, instance, method),
        {
            enabled: !!url,
            ...config,
            onError: (error) => {
                // @ts-ignore
                console.log({ error: error?.response?.data, url })
                // @ts-ignore
                config?.onError?.(error?.response?.data || error.message);
            }
        },
    );

    return context;
};

export const usePrefetch = ({ url, params, instance }) => {
    const queryClient = useQueryClient();
  
    return () => {
      if (!url) {
        return;
      }
      queryClient.prefetchQuery(
        [url, params],
        ({ queryKey, ...otherProps }) => fetcher({ queryKey, ...otherProps }),
      );
    };
  };


  export const useMutate = ({
    url,
    params = {},
    instance,
    method,
    ...options
  }) => {
    const queryClient = useQueryClient();
    const api = AxiosServices[instance];
  
    const request = async (payload) => {
      const { data } = await api(url, {
        method: method || 'POST',
        params,
        ...(method !== 'GET' && { data: payload }),
      });
      return data;
    };
  
    return useMutation, TError, TPayLoad>(request, {
      ...options,
      onSuccess: (data, variables, context) => {
        queryClient.invalidateQueries({ queryKey: [url]});
        options?.onSuccess?.(data, variables, context);
      },
      onError(error, variables, context) {
        // @ts-ignore
        console.log({error: error?.response?.data, url})
        // @ts-ignore
        options?.onError?.(error?.response?.data || error.message, variables, context);
      },
    });
  };