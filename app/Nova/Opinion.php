<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Http\Requests\NovaRequest;

class Opinion extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Opinion::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
        'email',
        'name'
    ];

    /**
     * No able to create pages
     *
     * @param Request $request
     */
    public static function authorizedToCreate(Request $request)
    {
        return false;
    }

    /**
     * No able to create pages
     *
     * @param Request $request
     */
    public function authorizedToUpdate(Request $request)
    {
        return false;
    }

    /**
     * Get the displayable label of the resource.
     *
     * @return  string
     */
    public static function label()
    {
        return __('Opinions');
    }

    /**
    * Get the displayable singular label of the resource.
    *
    * @return  string
    */
    public static function singularLabel()
    {
        return __('Opinion');
    }

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make(__('ID'), 'id')->sortable(),

            Text::make(__('Name'),'name')->sortable(),

            Text::make(__('Email'),'email')->sortable(),

            Select::make(__('Option'),'option')->options([
                1 => __('Le gusta la página'),
                2 => __('No le gusta la página'),
                3 => __('Dió una opinión'),
            ])->displayUsingLabels()
            ->sortable(),

            Textarea::make(__('Message'),'message')
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
