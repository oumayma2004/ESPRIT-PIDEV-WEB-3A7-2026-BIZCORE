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
        '/admin/domaine' => [[['_route' => 'admin_domaine_index', '_controller' => 'App\\Controller\\Admin\\AdminDomaineController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/domaine/nouveau' => [[['_route' => 'admin_domaine_new', '_controller' => 'App\\Controller\\Admin\\AdminDomaineController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/domaine/export-csv' => [[['_route' => 'admin_domaine_export_csv', '_controller' => 'App\\Controller\\Admin\\AdminDomaineController::exportCsv'], null, ['GET' => 0], null, false, false, null]],
        '/admin' => [[['_route' => 'admin_home', '_controller' => 'App\\Controller\\AdminProductDashboardController::index'], null, null, null, false, false, null]],
        '/admin/dashboard' => [[['_route' => 'admin_dashboard', '_controller' => 'App\\Controller\\AdminProductDashboardController::index'], null, null, null, false, false, null]],
        '/admin/stats' => [[['_route' => 'admin_stats', '_controller' => 'App\\Controller\\AdminProductDashboardController::stats'], null, null, null, false, false, null]],
        '/admin/products/add' => [[['_route' => 'product_add', '_controller' => 'App\\Controller\\AdminProductDashboardController::add'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/export-pdf' => [[['_route' => 'admin_export_pdf', '_controller' => 'App\\Controller\\AdminProductDashboardController::exportPdf'], null, null, null, false, false, null]],
        '/api/articles' => [[['_route' => 'api_article_list', '_controller' => 'App\\Controller\\ArticleApiController::list'], null, ['GET' => 0], null, false, false, null]],
        '/api/articles/stats' => [[['_route' => 'api_article_stats', '_controller' => 'App\\Controller\\ArticleApiController::stats'], null, ['GET' => 0], null, false, false, null]],
        '/api/articles/categories' => [[['_route' => 'api_article_categories', '_controller' => 'App\\Controller\\ArticleApiController::categories'], null, ['GET' => 0], null, false, false, null]],
        '/api/articles/trending' => [[['_route' => 'api_article_trending', '_controller' => 'App\\Controller\\ArticleApiController::trending'], null, ['GET' => 0], null, false, false, null]],
        '/api/articles/trending/refresh' => [[['_route' => 'api_article_trending_refresh', '_controller' => 'App\\Controller\\ArticleApiController::refreshTrending'], null, ['POST' => 0], null, false, false, null]],
        '/api/articles/generate-draft' => [[['_route' => 'api_article_generate_draft', '_controller' => 'App\\Controller\\ArticleApiController::generateDraft'], null, ['POST' => 0], null, false, false, null]],
        '/api/articles/moderate-avis' => [[['_route' => 'api_article_moderate_avis', '_controller' => 'App\\Controller\\ArticleApiController::moderateAvis'], null, ['POST' => 0], null, false, false, null]],
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
        '/dashboard/assistant' => [[['_route' => 'dashboard_assistant', '_controller' => 'App\\Controller\\DashboardController::assistant'], null, ['POST' => 0], null, false, false, null]],
        '/evenement' => [[['_route' => 'evenement_index', '_controller' => 'App\\Controller\\EvenementController::index'], null, ['GET' => 0], null, true, false, null]],
        '/evenement/new' => [[['_route' => 'evenement_new', '_controller' => 'App\\Controller\\EvenementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/evenement/admin/events/analyze-all' => [[['_route' => 'events_analyze_all', '_controller' => 'App\\Controller\\EvenementController::analyzeAll'], null, null, null, false, false, null]],
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
        '/reservation/api/notifications' => [
            [['_route' => 'api_notifications_list', '_controller' => 'App\\Controller\\ReservationController::getNotifications'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_notifications', '_controller' => 'App\\Controller\\ReservationEvenementController::apiNotifications'], null, ['GET' => 0], null, false, false, null],
        ],
        '/reservation/api/notifications/read-all' => [[['_route' => 'api_notifications_read_all', '_controller' => 'App\\Controller\\ReservationController::markAllNotificationsRead'], null, ['POST' => 0], null, false, false, null]],
        '/reservations/mes-reservations' => [[['_route' => 'reservation_my', '_controller' => 'App\\Controller\\ReservationEvenementController::my'], null, null, null, false, false, null]],
        '/reservations' => [[['_route' => 'reservation_index', '_controller' => 'App\\Controller\\ReservationEvenementController::index'], null, null, null, false, false, null]],
        '/reservations/payment/success' => [[['_route' => 'reservation_payment_success', '_controller' => 'App\\Controller\\ReservationEvenementController::paymentSuccess'], null, null, null, false, false, null]],
        '/ticket' => [[['_route' => 'ticket_view', '_controller' => 'App\\Controller\\ReservationEvenementController::view'], null, null, null, false, false, null]],
        '/auth/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/auth/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\SecurityController::register'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/auth/verify-email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\SecurityController::verifyEmail'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/auth/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/signalement' => [[['_route' => 'signalement_index', '_controller' => 'App\\Controller\\SignalementArticleController::index'], null, ['GET' => 0], null, false, false, null]],
        '/webhook/stripe' => [[['_route' => 'stripe_webhook', '_controller' => 'App\\Controller\\StripeWebhookController::handle'], null, ['POST' => 0], null, false, false, null]],
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
                        .'|domaine/(?'
                            .'|(\\d+)(*:137)'
                            .'|(\\d+)/modifier(*:159)'
                            .'|(\\d+)/supprimer(*:182)'
                        .')'
                        .'|products/(?'
                            .'|(\\d+)/edit(*:213)'
                            .'|(\\d+)/delete(*:233)'
                        .')'
                    .')'
                    .'|pi/(?'
                        .'|articles/(?'
                            .'|(\\d+)(*:266)'
                            .'|(\\d+)/view(*:284)'
                            .'|(\\d+)/readability(*:309)'
                            .'|(\\d+)/ai\\-analyze(*:334)'
                            .'|(\\d+)/call\\-ai(*:356)'
                        .')'
                        .'|rating/coach/([^/]++)/(?'
                            .'|stats(*:395)'
                            .'|rate(*:407)'
                            .'|all(*:418)'
                        .')'
                    .')'
                    .'|rticle/([^/]++)(?'
                        .'|(*:446)'
                        .'|/(?'
                            .'|edit(*:462)'
                            .'|delete(*:476)'
                        .')'
                    .')'
                .')'
                .'|/c(?'
                    .'|art/(?'
                        .'|add/(\\d+)(*:508)'
                        .'|update/(\\d+)(*:528)'
                        .'|remove/(\\d+)(*:548)'
                    .')'
                    .'|oach/(?'
                        .'|(\\d+)(*:570)'
                        .'|(\\d+)/edit(*:588)'
                        .'|(\\d+)/delete(*:608)'
                    .')'
                .')'
                .'|/even(?'
                    .'|ement/(?'
                        .'|([^/]++)(?'
                            .'|(*:646)'
                            .'|/(?'
                                .'|edit(*:662)'
                                .'|delete(*:676)'
                            .')'
                        .')'
                        .'|events/([^/]++)/analyze(*:709)'
                        .'|([^/]++)/waitlist(?'
                            .'|(*:737)'
                            .'|/promote(*:753)'
                        .')'
                    .')'
                    .'|ts/([^/]++)(?'
                        .'|(*:777)'
                        .'|/(?'
                            .'|commentaire(*:800)'
                            .'|waitlist/join(*:821)'
                        .')'
                    .')'
                .')'
                .'|/blog/(?'
                    .'|(\\d+)(*:846)'
                    .'|(\\d+)/react(*:865)'
                    .'|(\\d+)/reactions(*:888)'
                    .'|(\\d+)/avis(*:906)'
                .')'
                .'|/reservation(?'
                    .'|/api/(?'
                        .'|c(?'
                            .'|oach/([^/]++)/(?'
                                .'|availability(?'
                                    .'|(*:974)'
                                .')'
                                .'|reservations(*:995)'
                            .')'
                            .'|ancel/([^/]++)(*:1018)'
                        .')'
                        .'|notifications/([^/]++)/read(*:1055)'
                    .')'
                    .'|s/(?'
                        .'|new/([^/]++)(*:1082)'
                        .'|([^/]++)/(?'
                            .'|edit(*:1107)'
                            .'|pay(*:1119)'
                        .')'
                        .'|payment/cancel/([^/]++)(*:1152)'
                        .'|([^/]++)/(?'
                            .'|delete(*:1179)'
                            .'|admin\\-delete(*:1201)'
                            .'|cancel(*:1216)'
                        .')'
                    .')'
                .')'
                .'|/signalement/(?'
                    .'|new/(\\d+)(*:1253)'
                    .'|(\\d+)(*:1267)'
                    .'|(\\d+)/edit(*:1286)'
                    .'|(\\d+)/delete(*:1307)'
                .')'
                .'|/user/delete/(\\d+)(*:1335)'
                .'|/waitlist/([^/]++)/remove(*:1369)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        69 => [[['_route' => 'admin_coach_show', '_controller' => 'App\\Controller\\Admin\\AdminCoachController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        90 => [[['_route' => 'admin_coach_edit', '_controller' => 'App\\Controller\\Admin\\AdminCoachController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        112 => [[['_route' => 'admin_coach_delete', '_controller' => 'App\\Controller\\Admin\\AdminCoachController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        137 => [[['_route' => 'admin_domaine_show', '_controller' => 'App\\Controller\\Admin\\AdminDomaineController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        159 => [[['_route' => 'admin_domaine_edit', '_controller' => 'App\\Controller\\Admin\\AdminDomaineController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        182 => [[['_route' => 'admin_domaine_delete', '_controller' => 'App\\Controller\\Admin\\AdminDomaineController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        213 => [[['_route' => 'product_edit', '_controller' => 'App\\Controller\\AdminProductDashboardController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        233 => [[['_route' => 'product_delete', '_controller' => 'App\\Controller\\AdminProductDashboardController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        266 => [[['_route' => 'api_article_show', '_controller' => 'App\\Controller\\ArticleApiController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        284 => [[['_route' => 'api_article_increment_view', '_controller' => 'App\\Controller\\ArticleApiController::incrementView'], ['id'], ['PATCH' => 0], null, false, false, null]],
        309 => [[['_route' => 'api_article_readability', '_controller' => 'App\\Controller\\ArticleApiController::readability'], ['id'], ['GET' => 0], null, false, false, null]],
        334 => [[['_route' => 'api_article_ai_analyze', '_controller' => 'App\\Controller\\ArticleApiController::aiAnalyze'], ['id'], ['POST' => 0], null, false, false, null]],
        356 => [[['_route' => 'api_article_call_ai', '_controller' => 'App\\Controller\\ArticleApiController::callAi'], ['id'], ['POST' => 0], null, false, false, null]],
        395 => [[['_route' => 'api_coach_rating_stats', '_controller' => 'App\\Controller\\RatingController::getCoachStats'], ['id'], ['GET' => 0], null, false, false, null]],
        407 => [[['_route' => 'api_coach_rate', '_controller' => 'App\\Controller\\RatingController::rateCoach'], ['id'], ['POST' => 0], null, false, false, null]],
        418 => [[['_route' => 'api_coach_ratings_list', '_controller' => 'App\\Controller\\RatingController::getCoachRatings'], ['id'], ['GET' => 0], null, false, false, null]],
        446 => [[['_route' => 'article_show', '_controller' => 'App\\Controller\\ArticleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        462 => [[['_route' => 'article_edit', '_controller' => 'App\\Controller\\ArticleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        476 => [[['_route' => 'article_delete', '_controller' => 'App\\Controller\\ArticleController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        508 => [[['_route' => 'cart_add', '_controller' => 'App\\Controller\\CartController::add'], ['id'], ['POST' => 0], null, false, true, null]],
        528 => [[['_route' => 'cart_update', '_controller' => 'App\\Controller\\CartController::update'], ['id'], ['POST' => 0], null, false, true, null]],
        548 => [[['_route' => 'cart_remove', '_controller' => 'App\\Controller\\CartController::remove'], ['id'], ['POST' => 0], null, false, true, null]],
        570 => [[['_route' => 'app_coach_show', '_controller' => 'App\\Controller\\CoachController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        588 => [[['_route' => 'app_coach_edit', '_controller' => 'App\\Controller\\CoachController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        608 => [[['_route' => 'app_coach_delete', '_controller' => 'App\\Controller\\CoachController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        646 => [[['_route' => 'evenements_show', '_controller' => 'App\\Controller\\EvenementController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        662 => [[['_route' => 'evenement_edit', '_controller' => 'App\\Controller\\EvenementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        676 => [[['_route' => 'evenement_delete', '_controller' => 'App\\Controller\\EvenementController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        709 => [[['_route' => 'event_analyze', '_controller' => 'App\\Controller\\EvenementController::analyze'], ['id'], null, null, false, false, null]],
        737 => [[['_route' => 'admin_waitlist', '_controller' => 'App\\Controller\\Waitlistcontroller::adminWaitlist'], ['id'], ['GET' => 0], null, false, false, null]],
        753 => [[['_route' => 'admin_waitlist_promote', '_controller' => 'App\\Controller\\Waitlistcontroller::promote'], ['id'], ['POST' => 0], null, false, false, null]],
        777 => [[['_route' => 'evenement_show', '_controller' => 'App\\Controller\\EvenementFrontController::show'], ['id'], null, null, false, true, null]],
        800 => [[['_route' => 'evenement_add_commentaire', '_controller' => 'App\\Controller\\EvenementFrontController::addCommentaire'], ['id'], ['POST' => 0], null, false, false, null]],
        821 => [[['_route' => 'waitlist_join', '_controller' => 'App\\Controller\\Waitlistcontroller::join'], ['id'], ['POST' => 0], null, false, false, null]],
        846 => [[['_route' => 'frontend_blog_show', '_controller' => 'App\\Controller\\FrontendBlogController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        865 => [[['_route' => 'frontend_blog_react', '_controller' => 'App\\Controller\\FrontendBlogController::react'], ['id'], ['POST' => 0], null, false, false, null]],
        888 => [[['_route' => 'frontend_blog_reactions', '_controller' => 'App\\Controller\\FrontendBlogController::reactions'], ['id'], ['GET' => 0], null, false, false, null]],
        906 => [[['_route' => 'frontend_blog_avis', '_controller' => 'App\\Controller\\FrontendBlogController::avis'], ['id'], ['GET' => 0], null, false, false, null]],
        974 => [
            [['_route' => 'api_coach_availability', '_controller' => 'App\\Controller\\ReservationController::getCoachAvailability'], ['id'], ['GET' => 0], null, false, false, null],
            [['_route' => 'api_coach_set_availability', '_controller' => 'App\\Controller\\ReservationController::setAvailability'], ['id'], ['POST' => 0], null, false, false, null],
        ],
        995 => [[['_route' => 'api_coach_reservations', '_controller' => 'App\\Controller\\ReservationController::getCoachReservations'], ['id'], ['GET' => 0], null, false, false, null]],
        1018 => [[['_route' => 'api_cancel_reservation', '_controller' => 'App\\Controller\\ReservationController::cancelReservation'], ['id'], ['POST' => 0], null, false, true, null]],
        1055 => [[['_route' => 'api_notification_read', '_controller' => 'App\\Controller\\ReservationController::markNotificationRead'], ['id'], ['POST' => 0], null, false, false, null]],
        1082 => [[['_route' => 'reservation_new', '_controller' => 'App\\Controller\\ReservationEvenementController::new'], ['id'], null, null, false, true, null]],
        1107 => [[['_route' => 'reservation_edit', '_controller' => 'App\\Controller\\ReservationEvenementController::edit'], ['id'], null, null, false, false, null]],
        1119 => [[['_route' => 'reservation_pay', '_controller' => 'App\\Controller\\ReservationEvenementController::pay'], ['id'], ['POST' => 0], null, false, false, null]],
        1152 => [[['_route' => 'reservation_payment_cancel', '_controller' => 'App\\Controller\\ReservationEvenementController::paymentCancel'], ['id'], null, null, false, true, null]],
        1179 => [[['_route' => 'reservation_delete', '_controller' => 'App\\Controller\\ReservationEvenementController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        1201 => [[['_route' => 'reservation_admin_delete', '_controller' => 'App\\Controller\\ReservationEvenementController::adminDelete'], ['id'], ['POST' => 0], null, false, false, null]],
        1216 => [[['_route' => 'reservation_cancel', '_controller' => 'App\\Controller\\Waitlistcontroller::cancel'], ['id'], ['POST' => 0], null, false, false, null]],
        1253 => [[['_route' => 'signalement_new', '_controller' => 'App\\Controller\\SignalementArticleController::new'], ['id_article'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1267 => [[['_route' => 'signalement_show', '_controller' => 'App\\Controller\\SignalementArticleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1286 => [[['_route' => 'signalement_edit', '_controller' => 'App\\Controller\\SignalementArticleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1307 => [[['_route' => 'signalement_delete', '_controller' => 'App\\Controller\\SignalementArticleController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        1335 => [[['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['GET' => 0], null, false, true, null]],
        1369 => [
            [['_route' => 'admin_waitlist_remove', '_controller' => 'App\\Controller\\Waitlistcontroller::remove'], ['id'], ['POST' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
