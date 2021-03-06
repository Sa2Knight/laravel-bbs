<?php

/* スレッド一覧 */
Route::Get('/' , 'MyThreadsController@getThreadList');

/* スレッド作成 */
Route::Get('/thread/create' , 'MyThreadsController@getCreateThreadPage');
Route::Post('/thread/create' , 'MyThreadsController@createThread');

/* スレッド詳細 */
Route::Get('/thread/detail/{id}' , 'MyThreadsController@getThreadPage');

/* スレッドに書き込み */
Route::Post('/thread/detail/{id}' , 'MyThreadsController@createWriting');

/* スレッド削除 */
Route::Post('/thread/delete/{id}' , 'MyThreadsController@deleteThread');
