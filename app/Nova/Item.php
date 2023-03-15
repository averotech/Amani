<?php

namespace App\Nova;

use App\Nova\Actions\Published;
use App\Nova\Actions\UnPublished;
use App\Nova\Filters\MealCategory;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;
use Outl1ne\NovaSortable\Traits\HasSortableRows;
use Sietse85\NovaButton\Button;

class Item extends Resource
{

    use HasSortableRows;
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Item>
     */
    public static $model = \App\Models\Item::class;


    public static function canSort(NovaRequest $request, $resource)
    {
        // Do whatever here, ie:
        // return user()->isAdmin();
        // return $resource->id !== 5;
        return true;
    }
    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

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
            Button::make('اضهار الوجبة')->label('Button label')
                ->action(Published::class)
                ->canSee(function () {
                    return  $this->is_published == 0;
                })
                ->reload()->style('success'),
            Button::make('اخفاء الوجبة')->label('Button label')
                ->action(UnPublished::class)
                ->canSee(function () {
                    return  $this->is_published == 1;
                })
                ->reload()->style('danger'),
            Text::make('sort_order')->sortable()->hideWhenCreating()->hideWhenUpdating()->hideFromIndex()->hideFromDetail(),
            Text::make('name ar')->rules('required'),
            Text::make('name en')->hideFromIndex(),
            Text::make('name hr')->hideFromIndex(),
            BelongsTo::make('Category')->rules('required'),
            Textarea::make('description ar')->hideFromIndex(),
            Textarea::make('description en')->hideFromIndex(),
            Textarea::make('description hr')->hideFromIndex(),

            Text::make('price ar')->rules('required'),
            Text::make('price en')->hideFromIndex()->rules('required')->hideFromIndex(),
            Text::make('price hr')->hideFromIndex()->rules('required')->hideFromIndex(),
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
        return [new MealCategory()];
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
