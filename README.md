## Getting Started
Link to [Github Project](https://github.com/users/krlmrr/projects/2) to see current issues.

This application makes use of :
1. [Laravel](https://laravel.com/docs/8.x)
   1. [Laravel Sail](https://laravel.com/docs/8.x/sail)
   2. [Laravel Sanctum](https://laravel.com/docs/8.x/sanctum)
   3. [Laravel Pint](https://github.com/laravel/pint)
   4. [Larastan](https://github.com/nunomaduro/larastan)
3. [TailwindCSS](https://tailwindcss.com/docs)
4. [Inertia.js](https://inertiajs.com/)
5. [Vue.js 3](https://vuejs.org/guide/introduction.html)
6. [Vite](https://vitejs.dev/)

## Contributing
If you wish to contribute, feel free to create a PR! A couple of things we expect :
1. If you wrote a new feature, please write a test for that feature. 
2. Make sure your feature doesn't break any of the existing features by running `sail artisan test`.
3. If your PR interacts with a model, make sure to update the Factories so the tests pass.

## Code of Conduct
1. README only PRs will be declined.
2. PRs without tests will also be declined.
3. Your controllers should match the action of resource controllers (shown below). Please, avoid custom controller actions in the controller.

## Resource Controller Actions
[Laravel Controller Actions](https://laravel.com/docs/8.x/controllers#actions-handled-by-resource-controller)

| Verb 	     | URI 	                | Action   | Route Name      | Used For   |
|-------------|----------------------|----------|-----------------|------------|
| GET 	     | /photos              | index    | photos.index    | API / View |
| GET 	     | /photos/create       | create   | photos.create   | API / View |
| POST 	     | /photos 	          | store 	| photos.store    | API        |
| GET 	     | /photos/{photo}      | show     | photos.show     | API / View |
| GET 	     | /photos/{photo}/edit | edit 	   | photos.edit     | API / View |
| PUT / PATCH | /photos/{photo} 	    | update 	| photos.update   | API        |
| DELETE 	  | /photos/{photo} 	    | destroy  | photos.destroy  | API        |

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.