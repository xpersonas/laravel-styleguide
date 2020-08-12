<?php

namespace Xpersonas\Styleguide\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use App\Nova\Resource;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Http\Requests\NovaRequest;

class StyleguideColor extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \Xpersonas\Styleguide\StyleguideColor::class;

    /**
     * The logical group associated with the resource.
     *
     * @var string
     */
    public static $group = 'Styleguide';

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
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make()->sortable(),
            Date::make('CREATED', 'created_at')
                ->sortable()
                ->format('MMMM DD')
                ->exceptOnForms(),
            Text::make('class')
                ->sortable(),
            Trix::make('description')->hideFromIndex()->alwaysShow(),
            Text::make('Color', 'hex')
                ->rules('required', 'regex:/^#?([0-9a-fA-F]{3}){1,2}$/i'),
        ];
    }

    public function fieldsForDetail(NovaRequest $request)
    {
        return [
            Date::make('Created', 'created_at')
                ->format('MMMM DD'),
            Text::make('Class', 'class'),
            Trix::make('Description', 'description')->alwaysShow(),
            Text::make('Color', function () {
                return "<span style='border-bottom: 6px solid {$this->hex};'>{$this->hex}</span>";
            })->asHtml()
        ];
    }

    public function fieldsForIndex(NovaRequest $request)
    {
        return [
            Date::make('Created', 'created_at')
                ->format('MMMM DD'),
            Text::make('Class', 'class'),
            Text::make('Color', function () {
                return "<span style='border-bottom: 6px solid {$this->hex};'>{$this->hex}</span>";
            })->asHtml()
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
