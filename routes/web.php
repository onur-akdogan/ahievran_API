<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


use App\Http\Controllers\BirimController;
use App\Http\Controllers\DuyuruController;
use App\Http\Controllers\EtkinlikController;
use App\Http\Controllers\KaliteBildirimController;
use App\Http\Controllers\KaliteGondericiController;
use App\Http\Controllers\OtobusSaatleriController;
use App\Http\Controllers\ToplulukController;
use App\Http\Controllers\YemekController;


Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {


    Route::get('/home', function () {
        return view('dashboard');
    });

//Login

    Route::get('test123', function () {
        \DB::Table('users')->insert([
            'name' => 'test',
            'email' => 'bkaynar1998@gmail.com',
            'password' => bcrypt('12345689123456789'),
        ]);
    });

    Route::get('otobus-saatleri', [OtobusSaatleriController::class, 'index'])->name('otobus-saatleri');
    Route::get('otobus-saati-ekle',
        function () {
            return view('pages.otobus-saatleri.otobus-saati-ekle');
        });

    Route::get('yemekler', [YemekController::class, 'index'])->name('yemekler');
    Route::get('yemekekle',
        function () {
            return view('pages.yemek.yemekekle');
        });

//Birimler
    Route::get('birimler', [BirimController::class, 'index'])->name('birimler');
    Route::get('birimekle',
        function () {
            return view('pages.birim.birimekle');
        });

//Duyurular
    Route::get('duyurular', [DuyuruController::class, 'index'])->name('duyurular');
    Route::get('duyuruekle', [DuyuruController::class, 'birimler'])->name('duyuruekle');

//Topluluklar
    Route::get('topluluklar', [ToplulukController::class, 'index'])->name('topluluklar');
    Route::get('toplulukekle', function () {
        return view('pages.topluluk.toplulukekle');
    });
//Etkinlikler
    Route::get('etkinlikler', [EtkinlikController::class, 'index'])->name('etkinlikler');
    Route::get('etkinlikekle', [EtkinlikController::class, 'topluluklar'])->name('etkinlikekle');

//KaliteBildirim
    Route::get('kalitebildirim', [KaliteBildirimController::class, 'index'])->name('kalitebildirim');
    Route::get('kalitebildirimekle', function () {
        return view('pages.kalite.kalitebildirimekle');
    });

//KaliteGonderici
    Route::get('kalitegonderici', [KaliteGondericiController::class, 'index'])->name('kalitegonderici');
    Route::get('kalitegondericiekle', function () {
        return view('pages.kalite.kalitegondericiekle');
    });

//Kalite


//Ekleme İşlemleri
    Route::post('otobus-saat-ekle', [OtobusSaatleriController::class, 'store'])->name('otobus-saat-ekle');
    Route::post('yemek-ekle', [YemekController::class, 'store'])->name('yemek-ekle');
    Route::post('birim-ekle', [BirimController::class, 'store'])->name('birim-ekle');
    Route::post('duyuru-ekle', [DuyuruController::class, 'store'])->name('duyuru-ekle');
    Route::post('topluluk-ekle', [ToplulukController::class, 'store'])->name('topluluk-ekle');
    Route::post('etkinlik-ekle', [EtkinlikController::class, 'store'])->name('etkinlik-ekle');
    Route::post('kalitebildirim-ekle', [KaliteBildirimController::class, 'store'])->name('kalitebildirim-ekle');
    Route::post('kalitegonderici-ekle', [KaliteGondericiController::class, 'store'])->name('kalitegonderici-ekle');


//Silme İşlemleri
    Route::put('otobus-saati-delete/{id}', [OtobusSaatleriController::class, 'destroy'])->name('otobus-saati-delete');
    Route::put('yemek-delete/{id}', [YemekController::class, 'destroy'])->name('yemek-delete');
    Route::put('birim-delete/{id}', [BirimController::class, 'destroy'])->name('birim-delete');
    Route::put('duyuru-delete/{id}', [DuyuruController::class, 'destroy'])->name('duyuru-delete');
    Route::put('topluluk-delete/{id}', [ToplulukController::class, 'destroy'])->name('topluluk-delete');
    Route::put('etkinlik-delete/{id}', [ToplulukController::class, 'destroy'])->name('etkinlik-delete');
    Route::put('kalitebildirim-delete/{id}', [KaliteBildirimController::class, 'destroy'])->name('kalitebildirim-delete');

    Route::group(['prefix' => 'error'], function () {
        Route::get('404', function () {
            return view('pages.error.404');
        });
        Route::get('500', function () {
            return view('pages.error.500');
        });
    });


    Route::get('/clear-cache', function () {
        Artisan::call('cache:clear');
        return view('dashboard');
    });

//Run Migration
    Route::get('/run-migration', function () {
        Artisan::call('migrate');
        return view('dashboard');
    });


// 404 for undefined routes
    Route::any('/{page?}', function () {
        return View::make('pages.error.404');
    })->where('page', '.*');

}
);




/*
  Route::group(['prefix' => 'email'], function () {
    Route::get('inbox', function () {
        return view('pages.email.inbox');
    });
    Route::get('read', function () {
        return view('pages.email.read');
    });
    Route::get('compose', function () {
        return view('pages.email.compose');
    });
});
Route::group(['prefix' => 'apps'], function () {
    Route::get('chat', function () {
        return view('pages.apps.chat');
    });
    Route::get('calendar', function () {
        return view('pages.apps.calendar');
    });
});

Route::group(['prefix' => 'ui-components'], function () {
    Route::get('accordion', function () {
        return view('pages.ui-components.accordion');
    });
    Route::get('alerts', function () {
        return view('pages.ui-components.alerts');
    });
    Route::get('badges', function () {
        return view('pages.ui-components.badges');
    });
    Route::get('breadcrumbs', function () {
        return view('pages.ui-components.breadcrumbs');
    });
    Route::get('buttons', function () {
        return view('pages.ui-components.buttons');
    });
    Route::get('button-group', function () {
        return view('pages.ui-components.button-group');
    });
    Route::get('cards', function () {
        return view('pages.ui-components.cards');
    });
    Route::get('carousel', function () {
        return view('pages.ui-components.carousel');
    });
    Route::get('collapse', function () {
        return view('pages.ui-components.collapse');
    });
    Route::get('dropdowns', function () {
        return view('pages.ui-components.dropdowns');
    });
    Route::get('list-group', function () {
        return view('pages.ui-components.list-group');
    });
    Route::get('media-object', function () {
        return view('pages.ui-components.media-object');
    });
    Route::get('modal', function () {
        return view('pages.ui-components.modal');
    });
    Route::get('navs', function () {
        return view('pages.ui-components.navs');
    });
    Route::get('navbar', function () {
        return view('pages.ui-components.navbar');
    });
    Route::get('pagination', function () {
        return view('pages.ui-components.pagination');
    });
    Route::get('popovers', function () {
        return view('pages.ui-components.popovers');
    });
    Route::get('progress', function () {
        return view('pages.ui-components.progress');
    });
    Route::get('scrollbar', function () {
        return view('pages.ui-components.scrollbar');
    });
    Route::get('scrollspy', function () {
        return view('pages.ui-components.scrollspy');
    });
    Route::get('spinners', function () {
        return view('pages.ui-components.spinners');
    });
    Route::get('tabs', function () {
        return view('pages.ui-components.tabs');
    });
    Route::get('tooltips', function () {
        return view('pages.ui-components.tooltips');
    });
});

Route::group(['prefix' => 'advanced-ui'], function () {
    Route::get('cropper', function () {
        return view('pages.advanced-ui.cropper');
    });
    Route::get('owl-carousel', function () {
        return view('pages.advanced-ui.owl-carousel');
    });
    Route::get('sortablejs', function () {
        return view('pages.advanced-ui.sortablejs');
    });
    Route::get('sweet-alert', function () {
        return view('pages.advanced-ui.sweet-alert');
    });
});

Route::group(['prefix' => 'forms'], function () {
    Route::get('basic-elements', function () {
        return view('pages.forms.basic-elements');
    });
    Route::get('advanced-elements', function () {
        return view('pages.forms.advanced-elements');
    });
    Route::get('editors', function () {
        return view('pages.forms.editors');
    });
    Route::get('wizard', function () {
        return view('pages.forms.wizard');
    });
});

Route::group(['prefix' => 'charts'], function () {
    Route::get('apex', function () {
        return view('pages.charts.apex');
    });
    Route::get('chartjs', function () {
        return view('pages.charts.chartjs');
    });
    Route::get('flot', function () {
        return view('pages.charts.flot');
    });
    Route::get('peity', function () {
        return view('pages.charts.peity');
    });
    Route::get('sparkline', function () {
        return view('pages.charts.sparkline');
    });
});

Route::group(['prefix' => 'tables'], function () {
    Route::get('basic-tables', function () {
        return view('pages.tables.basic-tables');
    });
    Route::get('data-table', function () {
        return view('pages.tables.data-table');
    });
});

Route::group(['prefix' => 'icons'], function () {
    Route::get('feather-icons', function () {
        return view('pages.icons.feather-icons');
    });
    Route::get('mdi-icons', function () {
        return view('pages.icons.mdi-icons');
    });
});

Route::group(['prefix' => 'general'], function () {
    Route::get('blank-page', function () {
        return view('pages.general.blank-page');
    });
    Route::get('faq', function () {
        return view('pages.general.faq');
    });
    Route::get('invoice', function () {
        return view('pages.general.invoice');
    });
    Route::get('profile', function () {
        return view('pages.general.profile');
    });
    Route::get('pricing', function () {
        return view('pages.general.pricing');
    });
    Route::get('timeline', function () {
        return view('pages.general.timeline');
    });
});

Route::group(['prefix' => 'auth'], function () {
    Route::get('login', function () {
        return view('pages.auth.login');
    });
    Route::get('register', function () {
        return view('pages.auth.register');
    });
});*/
