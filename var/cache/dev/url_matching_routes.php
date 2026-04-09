<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin/coach' => [[['_route' => 'admin_coach_index', '_controller' => 'App\\Controller\\Admin\\AdminCoachController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/coach/nouveau' => [[['_route' => 'admin_coach_new', '_controller' => 'App\\Controller\\Admin\\AdminCoachController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/coach/export-csv' => [[['_route' => 'admin_coach_export_csv', '_controller' => 'App\\Controller\\Admin\\AdminCoachController::exportCsv'], null, ['GET' => 0], null, false, false, null]],
        '/admin/coach/statistiques' => [[['_route' => 'admin_coach_stats', '_controller' => 'App\\Controller\\Admin\\AdminCoachController::statistics'], null, ['GET' => 0], null, false, false, null]],
        '/admin/coach/phone-country-detection' => [[['_route' => 'admin_coach_phone_detection', '_controller' => 'App\\Controller\\Admin\\AdminCoachController::phoneCountryDetection'], null, ['GET' => 0], null, false, false, null]],
        '/admin/statistiques' => [[['_route' => 'admin_statistics_index', '_controller' => 'App\\Controller\\Admin\\AdminCoachStatisticsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/statistiques/detailles' => [[['_route' => 'admin_statistics_detailed', '_controller' => 'App\\Controller\\Admin\\AdminCoachStatisticsController::detailedStatistics'], null, ['GET' => 0], null, false, false, null]],
        '/admin' => [[['_route' => 'admin_home', '_controller' => 'App\\Controller\\AdminProductDashboardController::index'], null, null, null, false, false, null]],
        '/admin/dashboard' => [[['_route' => 'admin_dashboard', '_controller' => 'App\\Controller\\AdminProductDashboardController::index'], null, null, null, false, false, null]],
        '/admin/stats' => [[['_route' => 'admin_stats', '_controller' => 'App\\Controller\\AdminProductDashboardController::stats'], null, null, null, false, false, null]],
        '/admin/products/add' => [[['_route' => 'product_add', '_controller' => 'App\\Controller\\AdminProductDashboardController::add'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/export-pdf' => [[['_route' => 'admin_export_pdf', '_controller' => 'App\\Controller\\AdminProductDashboardController::exportPdf'], null, null, null, false, false, null]],
        '/article' => [[['_route' => 'article_index', '_controller' => 'App\\Controller\\ArticleController::index'], null, ['GET' => 0], null, true, false, null]],
        '/article/new' => [[['_route' => 'article_new', '_controller' => 'App\\Controller\\ArticleController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/cart' => [[['_route' => 'cart_index', '_controller' => 'App\\Controller\\CartController::index'], null, null, null, false, false, null]],
        '/cart/clear' => [[['_route' => 'cart_clear', '_controller' => 'App\\Controller\\CartController::clear'], null, ['POST' => 0], null, false, false, null]],
        '/chatbot/message' => [[['_route' => 'chatbot_message', '_controller' => 'App\\Controller\\ChatbotController::message'], null, ['POST' => 0], null, false, false, null]],
        '/chatbot/clear' => [[['_route' => 'chatbot_clear', '_controller' => 'App\\Controller\\ChatbotController::clear'], null, ['POST' => 0], null, false, false, null]],
        '/coach' => [[['_route' => 'app_coach_index', '_controller' => 'App\\Controller\\CoachController::index'], null, ['GET' => 0], null, true, false, null]],
        '/coach/search' => [[['_route' => 'app_coach_search', '_controller' => 'App\\Controller\\CoachController::search'], null, ['GET' => 0], null, false, false, null]],
        '/coach/new' => [[['_route' => 'app_coach_new', '_controller' => 'App\\Controller\\CoachController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/dashboard' => [[['_route' => 'dashboard', '_controller' => 'App\\Controller\\DashboardController::index'], null, null, null, false, false, null]],
        '/dashboard/load' => [[['_route' => 'dashboard_load', '_controller' => 'App\\Controller\\DashboardController::load'], null, null, null, false, false, null]],
        '/dashboard/report' => [[['_route' => 'dashboard_report', '_controller' => 'App\\Controller\\DashboardController::report'], null, ['GET' => 0], null, false, false, null]],
        '/evenement' => [[['_route' => 'evenement_index', '_controller' => 'App\\Controller\\EvenementController::index'], null, ['GET' => 0], null, true, false, null]],
        '/evenement/new' => [[['_route' => 'evenement_new', '_controller' => 'App\\Controller\\EvenementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/events' => [[['_route' => 'evenement_front', '_controller' => 'App\\Controller\\EvenementFrontController::index'], null, null, null, false, false, null]],
        '/blog' => [[['_route' => 'frontend_blog_index', '_controller' => 'App\\Controller\\FrontendBlogController::index'], null, ['GET' => 0], null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::home'], null, ['GET' => 0], null, false, false, null]],
        '/marketplace' => [[['_route' => 'marketplace_index', '_controller' => 'App\\Controller\\MarketplaceController::index'], null, null, null, false, false, null]],
        '/payment' => [[['_route' => 'payment_index', '_controller' => 'App\\Controller\\PaymentController::index'], null, null, null, false, false, null]],
        '/payment/checkout' => [[['_route' => 'payment_checkout', '_controller' => 'App\\Controller\\PaymentController::checkout'], null, ['POST' => 0], null, false, false, null]],
        '/payment/success' => [[['_route' => 'payment_success', '_controller' => 'App\\Controller\\PaymentController::success'], null, null, null, false, false, null]],
        '/profile' => [[['_route' => 'profile_index', '_controller' => 'App\\Controller\\ProfileController::index'], null, ['GET' => 0], null, false, false, null]],
        '/profile/update' => [[['_route' => 'profile_update', '_controller' => 'App\\Controller\\ProfileController::update'], null, ['POST' => 0], null, false, false, null]],
        '/reservation/api/reserve' => [[['_route' => 'api_create_reservation', '_controller' => 'App\\Controller\\ReservationController::createReservation'], null, ['POST' => 0], null, false, false, null]],
        '/reservation/api/notifications' => [[['_route' => 'api_notifications_list', '_controller' => 'App\\Controller\\ReservationController::getNotifications'], null, ['GET' => 0], null, false, false, null]],
        '/reservation/api/notifications/read-all' => [[['_route' => 'api_notifications_read_all', '_controller' => 'App\\Controller\\ReservationController::markAllNotificationsRead'], null, ['POST' => 0], null, false, false, null]],
        '/reservations/mes-reservations' => [[['_route' => 'reservation_my', '_controller' => 'App\\Controller\\ReservationEvenementController::my'], null, null, null, false, false, null]],
        '/reservations' => [[['_route' => 'reservation_index', '_controller' => 'App\\Controller\\ReservationEvenementController::index'], null, null, null, false, false, null]],
        '/auth/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/auth/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\SecurityController::register'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/auth/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/user/store' => [[['_route' => 'user_store', '_controller' => 'App\\Controller\\UserController::store'], null, ['POST' => 0], null, false, false, null]],
        '/user/update' => [[['_route' => 'user_update', '_controller' => 'App\\Controller\\UserController::update'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/a(?'
                    .'|dmin/(?'
                        .'|coach/(?'
                            .'|(\\d+)(*:69)'
                            .'|(\\d+)/modifier(*:90)'
                            .'|(\\d+)/supprimer(*:112)'
                        .')'
                        .'|products/(?'
                            .'|(\\d+)/edit(*:143)'
                            .'|(\\d+)/delete(*:163)'
                        .')'
                    .')'
                    .'|rticle/([^/]++)(?'
                        .'|(*:191)'
                        .'|/(?'
                            .'|edit(*:207)'
                            .'|delete(*:221)'
                        .')'
                    .')'
                    .'|pi/rating/coach/([^/]++)/(?'
                        .'|stats(*:264)'
                        .'|rate(*:276)'
                        .'|all(*:287)'
                    .')'
                .')'
                .'|/c(?'
                    .'|art/(?'
                        .'|add/(\\d+)(*:318)'
                        .'|update/(\\d+)(*:338)'
                        .'|remove/(\\d+)(*:358)'
                    .')'
                    .'|oach/(?'
                        .'|(\\d+)(*:380)'
                        .'|(\\d+)/edit(*:398)'
                        .'|(\\d+)/delete(*:418)'
                    .')'
                .')'
                .'|/even(?'
                    .'|ement/([^/]++)(?'
                        .'|(*:453)'
                        .'|/(?'
                            .'|edit(*:469)'
                            .'|delete(*:483)'
                        .')'
                    .')'
                    .'|ts/([^/]++)(*:504)'
                .')'
                .'|/blog/([^/]++)(*:527)'
                .'|/reservation(?'
                    .'|/api/(?'
                        .'|c(?'
                            .'|oach/([^/]++)/(?'
                                .'|availability(?'
                                    .'|(*:594)'
                                .')'
                                .'|reservations(*:615)'
                            .')'
                            .'|ancel/([^/]++)(*:638)'
                        .')'
                        .'|notifications/([^/]++)/read(*:674)'
                    .')'
                    .'|s/(?'
                        .'|new/([^/]++)(*:700)'
                        .'|([^/]++)/(?'
                            .'|edit(*:724)'
                            .'|delete(*:738)'
                            .'|admin\\-delete(*:759)'
                        .')'
                    .')'
                .')'
                .'|/user/delete/(\\d+)(*:788)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        69 => [[['_route' => 'admin_coach_show', '_controller' => 'App\\Controller\\Admin\\AdminCoachController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        90 => [[['_route' => 'admin_coach_edit', '_controller' => 'App\\Controller\\Admin\\AdminCoachController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        112 => [[['_route' => 'admin_coach_delete', '_controller' => 'App\\Controller\\Admin\\AdminCoachController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        143 => [[['_route' => 'product_edit', '_controller' => 'App\\Controller\\AdminProductDashboardController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        163 => [[['_route' => 'product_delete', '_controller' => 'App\\Controller\\AdminProductDashboardController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        191 => [[['_route' => 'article_show', '_controller' => 'App\\Controller\\ArticleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        207 => [[['_route' => 'article_edit', '_controller' => 'App\\Controller\\ArticleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        221 => [[['_route' => 'article_delete', '_controller' => 'App\\Controller\\ArticleController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        264 => [[['_route' => 'api_coach_rating_stats', '_controller' => 'App\\Controller\\RatingController::getCoachStats'], ['id'], ['GET' => 0], null, false, false, null]],
        276 => [[['_route' => 'api_coach_rate', '_controller' => 'App\\Controller\\RatingController::rateCoach'], ['id'], ['POST' => 0], null, false, false, null]],
        287 => [[['_route' => 'api_coach_ratings_list', '_controller' => 'App\\Controller\\RatingController::getCoachRatings'], ['id'], ['GET' => 0], null, false, false, null]],
        318 => [[['_route' => 'cart_add', '_controller' => 'App\\Controller\\CartController::add'], ['id'], ['POST' => 0], null, false, true, null]],
        338 => [[['_route' => 'cart_update', '_controller' => 'App\\Controller\\CartController::update'], ['id'], ['POST' => 0], null, false, true, null]],
        358 => [[['_route' => 'cart_remove', '_controller' => 'App\\Controller\\CartController::remove'], ['id'], ['POST' => 0], null, false, true, null]],
        380 => [[['_route' => 'app_coach_show', '_controller' => 'App\\Controller\\CoachController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        398 => [[['_route' => 'app_coach_edit', '_controller' => 'App\\Controller\\CoachController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        418 => [[['_route' => 'app_coach_delete', '_controller' => 'App\\Controller\\CoachController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        453 => [[['_route' => 'evenements_show', '_controller' => 'App\\Controller\\EvenementController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        469 => [[['_route' => 'evenement_edit', '_controller' => 'App\\Controller\\EvenementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        483 => [[['_route' => 'evenement_delete', '_controller' => 'App\\Controller\\EvenementController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        504 => [[['_route' => 'evenement_show', '_controller' => 'App\\Controller\\EvenementFrontController::show'], ['id'], null, null, false, true, null]],
        527 => [[['_route' => 'frontend_blog_show', '_controller' => 'App\\Controller\\FrontendBlogController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        594 => [
            [['_route' => 'api_coach_availability', '_controller' => 'App\\Controller\\ReservationController::getCoachAvailability'], ['id'], ['GET' => 0], null, false, false, null],
            [['_route' => 'api_coach_set_availability', '_controller' => 'App\\Controller\\ReservationController::setAvailability'], ['id'], ['POST' => 0], null, false, false, null],
        ],
        615 => [[['_route' => 'api_coach_reservations', '_controller' => 'App\\Controller\\ReservationController::getCoachReservations'], ['id'], ['GET' => 0], null, false, false, null]],
        638 => [[['_route' => 'api_cancel_reservation', '_controller' => 'App\\Controller\\ReservationController::cancelReservation'], ['id'], ['POST' => 0], null, false, true, null]],
        674 => [[['_route' => 'api_notification_read', '_controller' => 'App\\Controller\\ReservationController::markNotificationRead'], ['id'], ['POST' => 0], null, false, false, null]],
        700 => [[['_route' => 'reservation_new', '_controller' => 'App\\Controller\\ReservationEvenementController::new'], ['id'], null, null, false, true, null]],
        724 => [[['_route' => 'reservation_edit', '_controller' => 'App\\Controller\\ReservationEvenementController::edit'], ['id'], null, null, false, false, null]],
        738 => [[['_route' => 'reservation_delete', '_controller' => 'App\\Controller\\ReservationEvenementController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        759 => [[['_route' => 'reservation_admin_delete', '_controller' => 'App\\Controller\\ReservationEvenementController::adminDelete'], ['id'], ['POST' => 0], null, false, false, null]],
        788 => [
            [['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
