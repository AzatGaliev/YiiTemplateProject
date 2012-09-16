<?php
/**
 * Файл с общим контроллером для пользовательской части (Front-end)
 */

abstract class FrontendController extends Controller
{
    /**
     * @var string Макет для пользовательской части
     */
    public $layout = 'application.views.layouts.frontend';
}
