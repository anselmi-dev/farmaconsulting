<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Http\Requests\NovaRequest;
use Whitecube\NovaFlexibleContent\Flexible;
use Epartment\NovaDependencyContainer\HasDependencies;
use Epartment\NovaDependencyContainer\NovaDependencyContainer;

class Landing extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Landing::class;

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
     * Get the displayable label of the resource.
     *
     * @return  string
     */
    public static function label()
    {
        return __('Landings');
    }

    /**
    * Get the displayable singular label of the resource.
    *
    * @return  string
    */
    public static function singularLabel()
    {
        return __('Landing');
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
            // ID::make(__('ID'), 'id')->sortable(),

            Select::make('Qr')->options([
                '1' => 'QR1',
                '2' => 'QR2',
                '3' => 'QR3',
                '4' => 'QR4',
                '5' => 'QR5',
                '6' => 'QR6',
                '7' => 'QR7',
                '8' => 'QR8',
                '9' => 'QR9',
                '10' => 'QR10',
                '11' => 'QR11',
                '12B' => 'QR12B',
                '13' => 'QR13',
                '14' => 'QR14',
                '15' => 'QR15',
                '16' => 'QR16',
                '17B' => 'QR17B',
                '18' => 'QR18',
                '19' => 'QR19',
                '20' => 'QR20',
                '21' => 'QR21',
                '22' => 'QR22',
                '23' => 'QR23',
                '24' => 'QR24'
            ])->rules('required')->creationRules('unique:landings,qr')
            ->updateRules('unique:landings,qr,{{resourceId}}'),

            Text::make('Breadcrumb')->onlyOnIndex(),

            NovaDependencyContainer::make([
                Text::make('Breadcrumb')->rules('required', function($attribute, $value, $fail) {
                    if ($this->redirect) {
                        return $fail(__('validation.required', ['attribute' => $attribute]));
                    }
                })->sortable(),
            ])->dependsOn('redirect', 0),

            Boolean::make(__('Active'), 'active')->withMeta(['value' => $this->active ?? true])->sortable(),

            Boolean::make(__('Redirect'), 'redirect'),

            NovaDependencyContainer::make([
                Select::make(__('Redirect URL'), 'redirect_url')->options([
                    'qrs'             => '/qrs',
                    'landings'        => '/landings',
                    'conditions'      => '/conditions',
                    'news'            => '/noticias',
                    'faqs'            => '/faqs',
                    'contact'         => '/contacto',
                    'consulting'      => '/farmaconsulting-responde',
                    'farmaconsulting' => '/farmaconsulting',
                    'valoracion'      => '/valoracion-y-sugerencias',
                    'landingChrome'   => '/instalacion',
                ])->rules('required', function($attribute, $value, $fail) {
                    if ($this->redirect && is_null($value)) {
                        return $fail(__('validation.required', ['attribute' => $attribute]));
                    }
                }),
            ])->dependsOn('redirect', 1),

            NovaDependencyContainer::make([
                Flexible::make(__('Content'), 'content')
                    ->addLayout(__('Title'), 'title', [
                        Text::make(__('Title'), 'title')->rules('required'),
                        Text::make(__('Subtitle'), 'subtitle'),
                    ])
                    ->addLayout(__('Iframe'), 'iframe', [
                        Text::make(__('Iframe'), 'iframe')->rules('required')
                    ])
                    ->addLayout(__('Video'), 'video', [
                        Text::make(__('Title'), 'title'),
                        Text::make(__('Subtitle'), 'subtitle'),
                        Text::make('Video LINK (Vimeo)', 'video')->rules('required'),
                    ])
            ])->rules('required', function($attribute, $value, $fail) {
                if (!$this->redirect) {
                    return $fail('The '.$attribute.' field must be uppercase.');
                }
            })->dependsOn('redirect', 0),
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
