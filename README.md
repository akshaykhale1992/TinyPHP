# :rocket: Tiny PHP

Tiny PHP is a simple PHP Framework to create static websites using PHP.

Tiny PHP uses of [Laravel Blade Templating](https://laravel.com/docs/5.4/blade) Engine to render static Content.

## Understanding Tiny PHP
### :file_folder: Folder Structure
- controllers
  - Controller.php
- public
  - css
  - js
- views
  - errors
  
  In controllers folder there is Controller.php File which handles rendering of Page Cotent through Blade Engine.
  
  
  public is the root directory of the framework which contains index.php file which loads the libraries and based on the URL renders the Blade file content. 
  You may include CSS and JS files in this folder and load those in your view file.
  
  
  views is the folder where you may include your different Blade views saved with extension `.blade.php`.
  I have included about.blade.php, index.blade.php and template.blade.php.
  template.blade.php is the master file which loads the Stylesheet and Javascript files.
  about.blade.php and index.blade.ph are the child pages which extends the master template.blade.php
  
  
  In errors folder you may include your Error files, right now I have added 404.blade.php which gets loaded for invalid request.
  
  ## :confused: How to get started?
  
  Just clone the repository of download it from [here](https://github.com/akshaykhale1992/TinyPHP/archive/master.zip)
  
  then execute
  ```
  composer install
  ```
  
  to download all the necessary libraries for blade templating to work.
  
  That's it!
  
  Now just host the website, you may use php's build in server for that, just execute ``` cd public``` 
  and then execute ```php -S localhost:8000``` and you can check the URL 
  [http://localhost:8000/](http://localhost:8000/contact) in browser.
  
  ## :worried: How to add more Pages?
  
  Right now only home and about pages are there in the framework, if you want to add more pages you can do that by simply
  adding the methods in *controllers/Controller.php*. The method name will be dependent on the URL.
  
  Eg. If you want contact URL to be active then you can add following method in *Controller.php*
  
  ```
  public function contact()
  {
    return $this->renderer->render('contact', []);
  }
  ```
  
  along with the method you will need to add `contact.blade.php` file in views folder,
  after that you will be able to visit [http://localhost:8000/contact](http://localhost:8000/contact) page untill then it will render
  errors/404.blade.php file.
  
  If you want to add *localhost:8000/about/me* then you will have to add method with name `about_me` in Controller.php.
  
  If you want to add *localhost:8000/about/me/profile* then you will have to add method with name `about_me_profile` in Controller.php
  and so on.

# :wrench: Customizing
If you want to customize the directory names and file names, you can achieve that by simply using the `.env` file. Just rename the `.env.example` to `.env` and you can alter the default variables you can add more variables and customize it the way you want...

## :bouquet: Credits
[Windwalker Renderer](https://github.com/ventoviro/windwalker-renderer)

[illuminate/view](https://github.com/laravel/framework)
[Bootstrap](http://getbootstrap.com/)

Thank you!!!
