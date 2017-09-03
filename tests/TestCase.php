<?php

namespace Tests;

use Laravel\BrowserKitTesting\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{

    protected $baseUrl = 'http://todo.dev/';

    use CreatesApplication;
}
