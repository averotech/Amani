<?php

namespace App\Nova;

use App\Nova\Actions\Published;
use App\Nova\Actions\UnPublished;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;
use Outl1ne\NovaSortable\Traits\HasSortableRows;
use Sietse85\NovaButton\Button;
class Category extends Resource
{

    use HasSortableRows;
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Category>
     */

     public static function canSort(NovaRequest $request, $resource)
{
  // Do whatever here, ie:
  // return user()->isAdmin();
  // return $resource->id !== 5;
  return true;
}
    public static $model = \App\Models\Category::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name_ar';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
            ID::make()->sortable(),
            Boolean::make('Is Published')->hideWhenCreating(),
            Button::make('اضهار ')->label('Button label')
            ->action(Published::class)
            ->canSee(function () {
                return  $this->is_published == 0;
            })
            ->reload()->style('success'),
            Button::make('اخفاء ')->label('Button label')
            ->action(UnPublished::class)
            ->canSee(function () {
                return  $this->is_published == 1;
            })
            ->reload()->style('danger'),
            Text::make('sort_order')->sortable()->hideWhenCreating()->hideWhenUpdating()->hideFromIndex()->hideFromDetail(),
            Text::make('name ar'),
            Text::make('name en'),
            Text::make('name hr'),
        ];
    }
    public static function  afterCreate(Request $request, $model)
    {
        // dd($model->id);
       $model->sort_order = $model->id;

 $model->save();
    }
    /**
     * Get the cards available for the request.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function cards(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function filters(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function lenses(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function actions(NovaRequest $request)
    {
        return [];
    }
}
