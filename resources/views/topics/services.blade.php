@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Services</div>

                    <div class="card-body">
                        <h1>How to use Dependency Injection and Services?</h1>
                        <ul class="list-group">
                            <li class="list-group-item">First Way: From Controller to Static Service “Helper”</li>
                            <li class="list-group-item">Second Way: Create Service Object with Non-Static Method</li>
                            <li class="list-group-item">Third Way: Service Object with a Parameter</li>
                            <li class="list-group-item">Fourth Way: Dependency Injection – The Simple Case</li>
                            <li class="list-group-item">Fifth Way: Dependency Injection with Interface – Advanced
                                Usage
                            </li>
                        </ul>
                        <p>
                            The most popular way to separate logic from the Controller is to create a separate class,
                            usually called a <span class="green">SERVICE</span>.
                            In other words, it could be called a “helper” or just simply a “function”.
                        </p>
                        <p>
                            <span class="green">Notice:</span> Service classes are not part of Laravel itself, there’s
                            no
                            make:service Artisan command. It’s just a simple PHP class for calculations,
                            and “service” is just a typical name for it.
                            So, we create a file <span class="green">app/Services/ReportService.php</span>
                        </p>
                        <code>
                            <pre>

    public function index(Request $request, ReportService $reportService)
    {
        $entries = $reportService->getTransactionReport($request->input('project'));
    }
                            </pre>
                        </code>
                        <p class="green">Notice: Please check the log file and service controller</p>
                        <hr>
                        <p>Definations:</p>
                        <h2>What is Service container ?</h2>
                        <p>
                            The Laravel service container is a powerful tool for managing class dependencies and
                            performing dependency injection. Dependency injection is a fancy
                            phrase that essentially means this: class dependencies are "injected" into the class via the
                            constructor
                        </p>
                        <a href="https://laravel.com/docs/5.6/providers#introduction">Read More</a>
                        <hr>
                        <h2>What is Service providers ?</h2>
                        <p>
                            Service providers are the central place of all Laravel application bootstrapping.
                            Your own application, as well as all of Laravel's core services are bootstrapped via service
                            providers.

                            But, what do we mean by "bootstrapped"? In general, we mean registering things, including
                            registering service container bindings, event listeners, middleware, and even routes.
                            Service providers are the central place to configure your application.

                            If you open the <span class="green">config/app.php</span> file included with Laravel, you
                            will see a providers array.
                            These are all of the service provider classes that will be loaded for your application. Of
                            course,
                            many of these are "deferred" providers, meaning they
                            will not be loaded on every request, but only when the services they provide are actually
                            needed.
                        </p>
                        <a href="https://laravel.com/docs/5.6/providers#introduction">Read More</a>
                        <hr>
                        <h2>What is Singleton ?</h2>
                        <p>
                            It is a trait, taken from Ruby module.
                            When used this trait, we tell our application that whatever class it is given as parameter,
                            it should have only one instance through out the application.
                            Here MyClass will be resolved once and will have only one instance which can be accessed via
                            my_class.
                            Thus, it’s unnecessary to instantiate multiple copies of this class.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
