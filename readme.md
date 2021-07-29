+--------+-----------+------------------------------+----------------------+----------------------------------------------------------+--------------+

| Domain | Method    | URI                          | Name                 | Action                                                   | Middleware   |

+--------+-----------+------------------------------+----------------------+----------------------------------------------------------+--------------+

|        | POST      | api/login                    | login                | App\Http\Controllers\api\auth\LoginJwtController@login   | web          |

|        | GET|HEAD  | api/logout                   | logout               | App\Http\Controllers\api\auth\LoginJwtController@logout  | web          |

|        | GET|HEAD  | api/me/{$id}                 |                      | App\Http\Controllers\api\UserController@show             | web,jwt.auth |

|        | POST      | api/news                     | api.news.store       | App\Http\Controllers\api\NewsController@store            | web,jwt.auth |

|        | GET|HEAD  | api/news                     | api.news.index       | App\Http\Controllers\api\NewsController@index            | web,jwt.auth |

|        | GET|HEAD  | api/news/create              | api.news.create      | App\Http\Controllers\api\NewsController@create           | web,jwt.auth |

|        | GET|HEAD  | api/news/{news}              | api.news.show        | App\Http\Controllers\api\NewsController@show             | web,jwt.auth |

|        | PUT|PATCH | api/news/{news}              | api.news.update      | App\Http\Controllers\api\NewsController@update           | web,jwt.auth |

|        | DELETE    | api/news/{news}              | api.news.destroy     | App\Http\Controllers\api\NewsController@destroy          | web,jwt.auth |

|        | GET|HEAD  | api/news/{news}/edit         | api.news.edit        | App\Http\Controllers\api\NewsController@edit             | web,jwt.auth |

|        | GET|HEAD  | api/refresh                  | refresh              | App\Http\Controllers\api\auth\LoginJwtController@refresh | web          |

|        | POST      | api/register                 |                      | App\Http\Controllers\api\UserController@create           | web          |

|        | POST      | api/typenews                 | api.typenews.store   | App\Http\Controllers\api\TypenewsController@store        | web,jwt.auth |

|        | GET|HEAD  | api/typenews                 | api.typenews.index   | App\Http\Controllers\api\TypenewsController@index        | web,jwt.auth |

|        | GET|HEAD  | api/typenews/create          | api.typenews.create  | App\Http\Controllers\api\TypenewsController@create       | web,jwt.auth |

|        | DELETE    | api/typenews/{typenews}      | api.typenews.destroy | App\Http\Controllers\api\TypenewsController@destroy      | web,jwt.auth |

|        | PUT|PATCH | api/typenews/{typenews}      | api.typenews.update  | App\Http\Controllers\api\TypenewsController@update       | web,jwt.auth |

|        | GET|HEAD  | api/typenews/{typenews}      | api.typenews.show    | App\Http\Controllers\api\TypenewsController@show         | web,jwt.auth |

|        | GET|HEAD  | api/typenews/{typenews}/edit | api.typenews.edit    | App\Http\Controllers\api\TypenewsController@edit         | web,jwt.auth |

+--------+-----------+------------------------------+----------------------+----------------------------------------------------------+--------------+