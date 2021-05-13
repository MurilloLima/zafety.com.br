<?php

Route::get('panel/', 'Panel\HomeController@index')->name('panel.index');


//routes admin
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('admin/', 'Panel\Admin\HomeController@index')->name('admin.index');
    Route::get('admin/search/', 'Panel\Admin\HomeController@search')->name('admin.search');
});

//routes user
Route::group(['prefix' => 'user', 'middleware' => ['auth']], function () {
    // HSE
    Route::get('hse/', 'Panel\User\HseController@index')->name('user.hse.index');
    Route::post('hse/', 'Panel\User\HseController@store')->name('user.hse.store');
    Route::post('hse/update/{id}', 'Panel\Admin\HseController@update')->name('user.hse.update');
    Route::get('hse/delete/{id}', 'Panel\User\HseController@destroy')->name('user.hse.destroy');

    // RH
    Route::get('rh/', 'Panel\User\RhController@index')->name('user.rh.index');
    Route::post('rh/', 'Panel\User\RhController@store')->name('user.rh.store');
    Route::post('rh/update/{id}', 'Panel\Admin\RhController@update')->name('user.rh.update');
    Route::get('rh/delete/{id}', 'Panel\User\RhController@destroy')->name('user.rh.destroy');

    // Qualidade
    Route::get('qualidade/', 'Panel\User\QualidadeController@index')->name('user.qualidade.index');
    Route::post('qualidade/', 'Panel\User\QualidadeController@store')->name('user.qualidade.store');
    Route::post('qualidade/update/{id}', 'Panel\Admin\QualidadeController@update')->name('user.qualidade.update');
    Route::get('qualidade/delete/{id}', 'Panel\User\QualidadeController@destroy')->name('user.qualidade.destroy');

    // Produção
    Route::get('producao/', 'Panel\User\ProducaoController@index')->name('user.producao.index');
    Route::post('producao/', 'Panel\User\ProducaoController@store')->name('user.producao.store');
    Route::post('producao/update/{id}', 'Panel\Admin\ProducaoController@update')->name('user.producao.update');
    Route::get('producao/delete/{id}', 'Panel\User\ProducaoController@destroy')->name('user.producao.destroy');

    //ata reuniao
    Route::get('reuniao/', 'Panel\User\ReuniaoController@index')->name('user.reuniao.index');
    Route::get('reuniao/create/', 'Panel\User\ReuniaoController@create')->name('user.reuniao.create');
    Route::post('reuniao/', 'Panel\User\ReuniaoController@store')->name('user.reuniao.store');
    Route::get('reuniao/edit/{id}', 'Panel\User\ReuniaoController@edit')->name('user.reuniao.edit');
    Route::post('reuniao/update/{id}', 'Panel\Admin\ReuniaoController@update')->name('user.reuniao.update');
    Route::get('reuniao/delete/{id}', 'Panel\User\ReuniaoController@destroy')->name('user.reuniao.destroy');
    Route::get('reuniao/search/', 'Panel\User\ReuniaoController@search')->name('user.reuniao.search');

    //Minuto HSE
    Route::get('minuto-hse/', 'Panel\User\MhseController@index')->name('user.minuto-hse.index');
    Route::get('minuto-hse/create/', 'Panel\User\MhseController@create')->name('user.minuto-hse.create');
    Route::post('minuto-hse/', 'Panel\User\MhseController@store')->name('user.minuto-hse.store');
    Route::get('minuto-hse/edit/{id}', 'Panel\User\MhseController@edit')->name('user.minuto-hse.edit');
    Route::post('minuto-hse/update/{id}', 'Panel\Admin\MhseController@update')->name('user.minuto-hse.update');
    Route::get('minuto-hse/delete/{id}', 'Panel\User\MhseController@destroy')->name('user.minuto-hse.destroy');
    Route::get('minuto-hse/search/', 'Panel\User\MhseController@search')->name('user.minuto-hse.search');


    //Equipamento de proteção individual
    Route::get('epi/', 'Panel\User\EpiController@index')->name('user.epi.index');
    Route::get('epi/create/', 'Panel\User\EpiController@create')->name('user.epi.create');
    Route::post('epi/', 'Panel\User\EpiController@store')->name('user.epi.store');
    Route::get('epi/edit/{id}', 'Panel\User\EpiController@edit')->name('user.epi.edit');
    Route::post('epi/update/{id}', 'Panel\Admin\EpiController@update')->name('user.epi.update');
    Route::get('epi/delete/{id}', 'Panel\User\EpiController@destroy')->name('user.epi.destroy');
    Route::get('epi/search/', 'Panel\User\EpiController@search')->name('user.epi.search');

    //Permissão de trabalho
    Route::get('permissao-de-trabalho/', 'Panel\User\ArptController@index')->name('user.ar-pt.index');
    Route::get('permissao-de-trabalho/create/', 'Panel\User\ArptController@create')->name('user.ar-pt.create');
    Route::post('permissao-de-trabalho/', 'Panel\User\ArptController@store')->name('user.ar-pt.store');
    Route::get('permissao-de-trabalho/edit/{id}', 'Panel\User\ArptController@edit')->name('user.ar-pt.edit');
    Route::post('permissao-de-trabalho/update/{id}', 'Panel\Admin\ArptController@update')->name('user.ar-pt.update');
    Route::get('permissao-de-trabalho/delete/{id}', 'Panel\User\ArptController@destroy')->name('user.ar-pt.destroy');
    Route::get('permissao-de-trabalho/search/', 'Panel\User\ArptController@search')->name('user.ar-pt.search');

    //sub pages permisso de trabalho
    Route::get('permissao-de-trabalho/analise-de-risco/', 'Panel\User\ArptController@analise_risco')->name('user.ar-pt.analise_risco');
    Route::get('permissao-de-trabalho/trabalho-altura/', 'Panel\User\ArptController@trabalho_altura')->name('user.ar-pt.trabalho_altura');
    Route::get('permissao-de-trabalho/servico-a-quente/', 'Panel\User\ArptController@servico_quente')->name('user.ar-pt.servico_quente');
    Route::get('permissao-de-trabalho/espaco-confinados/', 'Panel\User\ArptController@espaco_confinado')->name('user.ar-pt.espaco_confinado');
    Route::get('permissao-de-trabalho/icamento/', 'Panel\User\ArptController@icamento')->name('user.ar-pt.icamento');
    Route::get('permissao-de-trabalho/eletrica/', 'Panel\User\ArptController@eletrica')->name('user.ar-pt.eletrica');
    Route::get('permissao-de-trabalho/escavacao/', 'Panel\User\ArptController@escavacao')->name('user.ar-pt.escavacao');

    //insperção
    Route::get('inspecao/', 'Panel\User\InspecaoController@index')->name('user.inspecao.index');
    Route::get('inspecao/create/', 'Panel\User\InspecaoController@create')->name('user.inspecao.create');
    Route::post('inspecao/', 'Panel\User\InspecaoController@store')->name('user.inspecao.store');
    Route::get('inspecao/edit/{id}', 'Panel\User\InspecaoController@edit')->name('user.inspecao.edit');
    Route::post('inspecao/update/{id}', 'Panel\Admin\InspecaoController@update')->name('user.inspecao.update');
    Route::get('inspecao/delete/{id}', 'Panel\User\InspecaoController@destroy')->name('user.inspecao.destroy');
    Route::get('inspecao/search/', 'Panel\User\InspecaoController@search')->name('user.inspecao.search');

    //nao-conformidade
    Route::get('nao-conformidade/', 'Panel\User\NcController@index')->name('user.nc.index');
    Route::get('nao-conformidade/create/', 'Panel\User\NcController@create')->name('user.nc.create');
    Route::post('nao-conformidade/', 'Panel\User\NcController@store')->name('user.nc.store');
    Route::get('nao-conformidade/edit/{id}', 'Panel\User\NcController@edit')->name('user.nc.edit');
    Route::post('nao-conformidade/update/{id}', 'Panel\Admin\NcController@update')->name('user.nc.update');
    Route::get('nao-conformidade/delete/{id}', 'Panel\User\NcController@destroy')->name('user.nc.destroy');
    Route::get('nao-conformidade/search/', 'Panel\User\NcController@search')->name('user.nc.search');

    //Ocorrencias
    Route::get('ocorrencias/', 'Panel\User\OcorrenciaController@index')->name('user.ocorrencias.index');
    Route::get('ocorrencia/create/', 'Panel\User\OcorrenciaController@create')->name('user.ocorrencia.create');
    Route::post('ocorrencia/', 'Panel\User\OcorrenciaController@store')->name('user.ocorrencia.store');
    Route::get('ocorrencia/edit/{id}', 'Panel\User\OcorrenciaController@edit')->name('user.inspecao.edit');
    Route::post('ocorrencia/update/{id}', 'Panel\Admin\OcorrenciaController@update')->name('user.ocorrencia.update');
    Route::get('ocorrencia/delete/{id}', 'Panel\User\OcorrenciaController@destroy')->name('user.ocorrencia.destroy');
    Route::get('ocorrencias/search/', 'Panel\User\OcorrenciaController@search')->name('user.ocorrencias.search');

    //Emergencias
    Route::get('emergencias/', 'Panel\User\EmergenciaController@index')->name('user.emergencias.index');
    Route::get('emergencia/create/', 'Panel\User\EmergenciaController@create')->name('user.emergencia.create');
    Route::post('emergencia/', 'Panel\User\EmergenciaController@store')->name('user.emergencia.store');
    Route::get('emergencia/edit/{id}', 'Panel\User\EmergenciaController@edit')->name('user.emergencia.edit');
    Route::post('emergencia/update/{id}', 'Panel\Admin\EmergenciaController@update')->name('user.emergencia.update');
    Route::get('emergencia/delete/{id}', 'Panel\User\EmergenciaController@destroy')->name('user.emergencia.destroy');
    Route::get('emergencia/search/', 'Panel\User\EmergenciaController@search')->name('user.emergencias.search');
    Route::get('emergencia/relatorio-simulado/', 'Panel\User\EmergenciaController@relatorio')->name('user.emergencias.relatorio');

});


Auth::routes();
