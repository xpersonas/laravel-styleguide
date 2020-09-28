<?php

namespace Xpersonas\Styleguide\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Code;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\ID;
use App\Nova\Resource;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\Trix;

class StyleguidePattern extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \Xpersonas\Styleguide\StyleguidePattern::class;

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
            Text::make('title')->sortable(),
            Trix::make('description')->hideFromIndex()->alwaysShow(),
            Code::make('pattern'),
        ];
    }

    public function fieldsForDetail($request)
    {
        return [
            Date::make('Created', 'created_at')
                ->format('MMMM DD'),
            Text::make('title')->sortable(),
            Trix::make('description')->hideFromIndex()->alwaysShow(),
            Code::make('pattern'),
        ];
    }

    public function fieldsForIndex($request)
    {
        return [
            Date::make('Created', 'created_at')
                ->format('MMMM DD'),
            Text::make('title')->sortable(),
            Trix::make('description')->hideFromIndex()->alwaysShow(),
            Code::make('pattern'),
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
