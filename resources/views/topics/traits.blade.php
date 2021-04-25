@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Trait</div>

                <div class="card-body">
                    <h1>What is a Trait ?</h1>
                    <p>
                        Traits are a handy way of reusing code in PHP, another way to help keep your code 
                        <span class="green">DRY (or “don’t repeat yourself”)</span>. If you’ve used 
                        whats commonly referred to as Mixins in some languages and frameworks, 
                        you’ll be probably be familiar with Traits. It’s great that we can write some code, 
                        reuse that again and again throughout our codebase more efficientl
                        meanwhile – It’s good practice and helps us maintain the codebase easier, 
                        so yay for Laravel Traits / PHP Traits!
                    </p>
                    <a href="https://www.w3schools.com/php/php_oop_traits.asp">Read more</a>
                    <hr>
                    <h2>How using Traits help us in Laravel ?</h2>
                    <p>
                        In Laravel, you may of come across a variety of “out the box” traits that 
                        you can use, one of the most popular ones you may see across your Models 
                        is the <span class="green">Soft Deletes Trait</span>. In short – using this trait allows you to “delete”
                        your model, but without removing it entirely from the database. Utilizing a
                        column in the database called “deleted_at” to “soft” delete the model when
                        the trait is used. This can be useful if you frequently delete and restore models.
                        As you can see, using traits in your projects can be an easy way to create and add
                        impressive reusable functionality to your project.
                    </p>
                    <hr>
                    <h2>How to avoid abusing Traits ?</h2>
                    <p>
                        As traits allow you to easily add another set of functions to your classes, 
                        they may unfortunately become the place 
                        to be when you just want to add another little bit of shared functionality 
                        here and there if your not careful.
                    </p>
                    <p>
                        This is not a problem with Traits themselves, but more so how they are used. 
                        In your project, be careful to not let them get bloated with functionality that doesn’t concern them. 
                        Don’t add unnecessary code to a trait that doesn’t need to be there or can be abstracted away into another
                        Class or Trait.Where possible, try and stick to the <a href="https://stackify.com/solid-design-principles/">Single Responsibility Principle.</a>
                    </p>
                    <hr>
                    <h2>Example</h2>
                    <p>
                        <code>
                            <pre>
    trait StoreImageTrait { 
    public function verifyAndStoreImage() {

    }

    //use inside class
    use StoreImageTrait;
    access via $this->verifyAndStoreImage();
    
    trait name => StoreImageTrait

                            </pre>
                        </code>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection