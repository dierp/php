

### Running project
* php7 artisan serve

### Route List
* php7 artisan route:list

# Create Routes
* Go to routes/api
```
Route::apiResource('/ongs', 'OngsController');
```
* the result will be the follow routes:
```
+--------+-----------+----------------+--------------+---------------------------------------------+------------+
| Domain | Method    | URI            | Name         | Action                                      | Middleware |
+--------+-----------+----------------+--------------+---------------------------------------------+------------+
|        | GET|HEAD  | /              |              | Closure                                     | web        |
|        | GET|HEAD  | api/ongs       | ongs.index   | App\Http\Controllers\OngsController@index   | api        |
|        | POST      | api/ongs       | ongs.store   | App\Http\Controllers\OngsController@store   | api        |
|        | GET|HEAD  | api/ongs/{ong} | ongs.show    | App\Http\Controllers\OngsController@show    | api        |
|        | PUT|PATCH | api/ongs/{ong} | ongs.update  | App\Http\Controllers\OngsController@update  | api        |
|        | DELETE    | api/ongs/{ong} | ongs.destroy | App\Http\Controllers\OngsController@destroy | api        |
+--------+-----------+----------------+--------------+---------------------------------------------+------------+
```

# Create Controllers
* Run: php7 artisan make:controler OngsController --resource
* This command will generate an api orientaded controller with the necessar functions to run a rest api.
```
public function index(){}
public function store(Request $request){}
public function show($id){}
public function update(Request $request, $id){}
public function destroy($id){}
```

# Create Resources
* The next command will generate a resource to a single item returning form db: php7 artisan make:resource OngResource
* We also have to create a Resource to handle a collection of items: php7 artisan make:resource OngResourceCollection --collection

# Create Models

# Serve project
* php artisan serve
* Now you are able to start to do requests. DONT'T FORGET to add Accept:apllication/json to Headers
