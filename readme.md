
# Laravel BoilerPlate Template

A laravel Boilerplate template with user management , role management, Admin LTE theme and many JS and PHP packages installed

# Features & Implemented Module
1. Authentication with user disabed/enabled implementation
2. User management
3. Role management
4. Laravel Permission [spatie-permission](https://github.com/spatie/laravel-permission) 
5. AJAX Loading and page Loading indication
6. Theme Admin (AdminLTE)
7. Reusable Custom function for Bootstrap validation, Get form Data, Ajax
and more
8. Widgets/alert/modal/table/box Implemented as reusable using  Laravel components & slot

# Some Features And Usages
1. You can use Theme's widgets/alert/modal/table/box using laravel's components slot in blade template
    ``` bash

            # example widget
            @component('components.widget')
               @slot('title') Your title @endslot
               @slot('description')
                   your description
               @endslot
               @slot('body')
                your body
               @endslot
           @endcomponent
    ```        
           
2. Alert component added to the blade directives for easy of use.
    ``` bash
            #so you can use alert in any blade like this;
            @alert(['type' => 'success'])
               {{$message}}
            @endalert
            
            # alert type=> success,info,danger,warning; 
            # default type => info
    ```
3. Easy readymade function provided for Bootstrap-validator
            **1. Validation Check**
    ``` bash
 
            #Example: Suppose Your Form
            <form id="clientForm" data-toggle="validator" class="form-horizontal">
             <div class="form-group has-error">
                    <label for="name" class="col-sm-2 control-label">Client Name</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" required id="name"
                    placeholder="Name">
                </div>
                <div class="help-block with-errors"></div>
             </div>
            </form>
            
            #Now you can validate form like this in JS:
               if (isFormValid('clientForm')) {
                   #valid
               }
               else{
                   #Invalid
               }
    ```


    **2. Get all form input in Javascript Object**
     ``` bash
            var data = getFormData("clientForm");
            #output will be, 
            data = {
                name: value,
                id: value,
                address: value
            }
            #Object key will be input tag ID and value will be inputed value;
    ```
 
4. Using EasyAjax
    You can easily use easyAjax Module which will help you to use Ajax as resuable function and keep your code clean.
    Example:
    ``` bash
       #post
        EasyAjax.post(data,"/clients").done(function (data) {
            //done        
        }).fail(function () {
            //error       
        });

        #get
        EasyAjax.get("/clients").done(function () {
            //done        
        });

        #put
        EasyAjax.post(data,"/clients").done(function () {
            //done        
        }).fail(function () {
            //error       
        });

        #delete
        EasyAjax.delete("/clients/1").done(function () {
            //done        
        }).fail(function () {
            //error       
        });

    ```
In the EasyAJAX module CSRF Token Added in the before send method.

5. Using EasyCRUD: Recommended way of excuting a query is using DB::beginTransaction and DB::commit method; so that you can cancel the transaction using DB::rollback method if exception happened at the middle of an excuting query. It ensures No data will be affected until the transaction is committed.
``` bash
    #example
     DB::beginTransaction();
        try {
            $model = new Client();
            $model->name = "Sangit";
            $model->save();
        }
        catch(ValidationException $e)
        {
            DB::rollback();
            return response()->json(['message' => 'DB problem'], 500);
        } catch(\Exception $e)
        {
            DB::rollback();
            return response()->json(['message' => 'DB problem'], 500);
        }
        DB::commit();
        return response()->json(['message' => "Done successfully"], 201);
```
##### You can easily use  Transaction,Rollback and Commit Features without any hassle using a facades named EasyCRUD which will ensure ease of use and to keep the code clean.
```bash
    #example
    #import
    use EasyCrud;

    $model = new Client();
    $model->name = "Sangit";
    $model = EasyCrud::create($model);
 ```
##### This three lines are equivalent to the showed example of Transaction, Rollback and Commit method above.
    
 ``` bash   
    #Similarly as Create method of easycrud you can use
    EasyCrud::update($model);
    EasyCrud::delete($model);
    EasyCrud::restore($model);
```            
# Packages Included
####PHP Packages
1. Laravel Permission [spatie-permission](https://github.com/spatie/laravel-permission) 
2. PHP debugbar ( [barryvdh debugbar](https://github.com/barryvdh/laravel-debugbar) )
3. Carbon

####Other JS and css Packages
1. Bootstrap
2. Bootstrap slider|colorpiker|datepicker|datepicker-ranslider|timepicker|wysihtml5
3. Chart.js
4. CKeditor
5. Datatables
6. fastclick
7. Flot
8. Font-awesome
7. Full calender
8. InputMask
7. Jquery
8. Jquery knob|slimscroll|sparkline|Jqueryui
9. mocha
10. jvectormap
11. moment js
12. Packages
13. Raphael
14. Select 2
15. Hotsnackbar [Hotsnackbar](https://github.com/nakulrathore/HotSnackbar)
16. ICheck
17. Sweet Alert [bootstrap-sweetalert](https://lipis.github.io/bootstrap-sweetalert/)
18. Bootstrap Validator ( [Validator](http://1000hz.github.io/bootstrap-validator/) )

# Note
    1. All packages is not added in the webpack.mix.js for compile; only important packages are added.
    2. You have to add the package you need from "resources/assets/theme-asset" folder in the webpack.mix.js file.
    3. customise css and related js from resources/assets/

## Run
Copy .env.example to .env and setup your Database information.

``` bash
# install dependencies
npm install

# Composer install
composer install

# Laravel init
php artisan key:generate
php artisan migrate
php artisan db:seed

# serve at localhost:8000
php artisan serve

# serve with hot reload at localhost:3000
npm run watch

```

 Use DB seed for seeding Role and Permission for Role Management and User Management access.
# Login (if you use DB seed)
    user admin@sangit.info
    pass: secret

  # Screenshot
![alt text](https://github.com/sangit0/Laravel-boilerplate-Template/blob/master/screenshots/login.png "Screenshot")
![alt text](https://github.com/sangit0/Laravel-boilerplate-Template/blob/master/screenshots/user-profile.png "Screenshot")
![alt text](https://github.com/sangit0/Laravel-boilerplate-Template/blob/master/screenshots/user-manager.png "Screenshot")
![alt text](https://github.com/sangit0/Laravel-boilerplate-Template/blob/master/screenshots/roles.png "Screenshot")
![alt text](https://github.com/sangit0/Laravel-boilerplate-Template/blob/master/screenshots/edit-user.png "Screenshot")
![alt text](https://github.com/sangit0/Laravel-boilerplate-Template/blob/master/screenshots/edit-role.png "Screenshot")
![alt text](https://github.com/sangit0/Laravel-boilerplate-Template/blob/master/screenshots/php-debugbar.png "Screenshot")
