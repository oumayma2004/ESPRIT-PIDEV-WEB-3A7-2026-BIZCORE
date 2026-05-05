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
        '/admin/domaine/whats-new' => [[['_route' => 'admin_domaine_whats_new', '_controller' => 'App\\Controller\\Admin\\AdminDomaineController::whatsNew'], null, ['GET' => 0], null, false, false, null]],
        '/admin/domaine/whats-new/add' => [[['_route' => 'admin_domaine_whats_new_add', '_controller' => 'App\\Controller\\Admin\\AdminDomaineController::whatsNewAdd'], null, ['POST' => 0], null, false, false, null]],
        '/admin/domaine/statistiques' => [[['_route' => 'admin_domaine_stats', '_controller' => 'App\\Controller\\Admin\\AdminDomaineController::stats'], null, ['GET' => 0], null, false, false, null]],
        '/admin/domaine/export-csv' => [[['_route' => 'admin_domaine_export_csv', '_controller' => 'App\\Controller\\Admin\\AdminDomaineController::exportCsv'], null, ['GET' => 0], null, false, false, null]],
        '/admin' => [[['_route' => 'admin_home', '_controller' => 'App\\Controller\\AdminProductDashboardController::index'], null, null, null, false, false, null]],
        '/admin/dashboard' => [[['_route' => 'admin_dashboard', '_controller' => 'App\\Controller\\AdminProductDashboardController::index'], null, null, null, false, false, null]],
        '/admin/stats' => [[['_route' => 'admin_stats', '_controller' => 'App\\Controller\\AdminProductDashboardController::stats'], null, null, null, false, false, null]],
        '/admin/products/add' => [[['_route' => 'product_add', '_controller' => 'App\\Controller\\AdminProductDashboardController::add'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/export-pdf' => [[['_route' => 'admin_export_pdf', '_controller' => 'App\\Controller\\AdminProductDashboardController::exportPdf'], null, null, null, false, false, null]],
        '/marketplace/api/translate' => [[['_route' => 'api_translate', '_controller' => 'App\\Controller\\ApiController::translate'], null, ['POST' => 0], null, false, false, null]],
        '/marketplace/api/translate-batch' => [[['_route' => 'api_translate_batch', '_controller' => 'App\\Controller\\ApiController::translateBatch'], null, ['POST' => 0], null, false, false, null]],
        '/marketplace/api/currency-rates' => [[['_route' => 'api_currency_rates', '_controller' => 'App\\Controller\\ApiController::currencyRates'], null, ['GET' => 0], null, false, false, null]],
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
        '/coach/filter' => [[['_route' => 'app_coach_filter', '_controller' => 'App\\Controller\\CoachController::filter'], null, ['GET' => 0], null, false, false, null]],
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
        '/marketplace/sell' => [[['_route' => 'marketplace_sell', '_controller' => 'App\\Controller\\MarketplaceController::sellProduct'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/marketplace' => [[['_route' => 'marketplace_index', '_controller' => 'App\\Controller\\MarketplaceController::index'], null, null, null, false, false, null]],
        '/marketplace/api/shops/ranking' => [[['_route' => 'marketplace_api_shops_ranking', '_controller' => 'App\\Controller\\MarketplaceController::getShopsRanking'], null, ['GET' => 0], null, false, false, null]],
        '/marketplace/api/sms/send' => [[['_route' => 'marketplace_api_sms_send', '_controller' => 'App\\Controller\\MarketplaceController::apiSmsSend'], null, ['POST' => 0], null, false, false, null]],
        '/marketplace/api/sms/payment-confirm' => [[['_route' => 'marketplace_api_sms_payment_confirm', '_controller' => 'App\\Controller\\MarketplaceController::apiSmsPaymentConfirm'], null, ['POST' => 0], null, false, false, null]],
        '/marketplace/favorites' => [[['_route' => 'marketplace_favorites', '_controller' => 'App\\Controller\\MarketplaceController::favorites'], null, null, null, false, false, null]],
        '/marketplace/api/flash-promos' => [[['_route' => 'marketplace_api_flash_promos', '_controller' => 'App\\Controller\\MarketplaceController::getActiveFlashPromos'], null, ['GET' => 0], null, false, false, null]],
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
        '/admin/vendors' => [[['_route' => 'vendor_index', '_controller' => 'App\\Controller\\VendorController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/vendors/new' => [[['_route' => 'vendor_new', '_controller' => 'App\\Controller\\VendorController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/a(?'
                    .'|dmin/(?'
                        .'|coach/(?'
                            .'|(\\d+)(*:34)'
                            .'|(\\d+)/modifier(*:55)'
                            .'|(\\d+)/supprimer(*:77)'
                        .')'
                        .'|domaine/(?'
                            .'|(\\d+)(*:101)'
                            .'|(\\d+)/modifier(*:123)'
                            .'|(\\d+)/supprimer(*:146)'
                        .')'
                        .'|products/(?'
                            .'|(\\d+)/edit(*:177)'
                            .'|(\\d+)/delete(*:197)'
                        .')'
                        .'|vendors/(?'
                            .'|(\\d+)(*:222)'
                            .'|(\\d+)/edit(*:240)'
                            .'|(\\d+)/delete(*:260)'
                            .'|(\\d+)/confirm\\-delete(*:289)'
                            .'|(\\d+)/flash\\-promo(*:315)'
                            .'|(\\d+)/flash\\-promo/status(*:348)'
                            .'|(\\d+)/flash\\-promo/cancel(*:381)'
                            .'|(\\d+)/flash\\-promo/ai\\-suggest(*:419)'
                        .')'
                    .')'
                    .'|pi/(?'
                        .'|articles/(?'
                            .'|(\\d+)(*:452)'
                            .'|(\\d+)/view(*:470)'
                            .'|(\\d+)/readability(*:495)'
                            .'|(\\d+)/ai\\-analyze(*:520)'
                            .'|(\\d+)/call\\-ai(*:542)'
                        .')'
                        .'|rating/coach/([^/]++)/(?'
                            .'|stats(*:581)'
                            .'|rate(*:593)'
                            .'|all(*:604)'
                        .')'
                    .')'
                    .'|rticle/([^/]++)(?'
                        .'|(*:632)'
                        .'|/(?'
                            .'|edit(*:648)'
                            .'|delete(*:662)'
                        .')'
                    .')'
                .')'
                .'|/c(?'
                    .'|art/(?'
                        .'|add/(\\d+)(*:694)'
                        .'|update/(\\d+)(*:714)'
                        .'|remove/(\\d+)(*:734)'
                    .')'
                    .'|oach/(?'
                        .'|(\\d+)(*:756)'
                        .'|(\\d+)/edit(*:774)'
                        .'|(\\d+)/delete(*:794)'
                    .')'
                .')'
                .'|/even(?'
                    .'|ement/(?'
                        .'|([^/]++)(?'
                            .'|(*:832)'
                            .'|/(?'
                                .'|edit(*:848)'
                                .'|delete(*:862)'
                            .')'
                        .')'
                        .'|events/([^/]++)/analyze(*:895)'
                        .'|([^/]++)/waitlist(?'
                            .'|(*:923)'
                            .'|/promote(*:939)'
                        .')'
                    .')'
                    .'|ts/([^/]++)(?'
                        .'|(*:963)'
                        .'|/(?'
                            .'|commentaire(*:986)'
                            .'|waitlist/join(*:1007)'
                        .')'
                    .')'
                .')'
                .'|/blog/(?'
                    .'|(\\d+)(*:1033)'
                    .'|(\\d+)/react(*:1053)'
                    .'|(\\d+)/reactions(*:1077)'
                    .'|(\\d+)/avis(*:1096)'
                .')'
                .'|/marketplace/(?'
                    .'|product/([^/]++)/(?'
                        .'|edit(*:1146)'
                        .'|delete(*:1161)'
                        .'|r(?'
                            .'|ate(*:1177)'
                            .'|eviews(*:1192)'
                        .')'
                    .')'
                    .'|api/(?'
                        .'|shops/([^/]++)/rate(*:1229)'
                        .'|favorites/toggle/([^/]++)(*:1263)'
                        .'|reviews/([^/]++)(*:1288)'
                    .')'
                .')'
                .'|/reservation(?'
                    .'|/(?'
                        .'|api/(?'
                            .'|c(?'
                                .'|oach/([^/]++)/(?'
                                    .'|availability(?'
                                        .'|(*:1361)'
                                    .')'
                                    .'|reservations(*:1383)'
                                .')'
                                .'|ancel/([^/]++)(*:1407)'
                            .')'
                            .'|notifications/([^/]++)/read(*:1444)'
                        .')'
                        .'|([^/]++)/calendar(*:1471)'
                    .')'
                    .'|s/(?'
                        .'|([^/]++)/event\\-thumb(*:1507)'
                        .'|new/([^/]++)(*:1528)'
                        .'|([^/]++)/(?'
                            .'|edit(*:1553)'
                            .'|pay(*:1565)'
                        .')'
                        .'|payment/cancel/([^/]++)(*:1598)'
                        .'|([^/]++)/(?'
                            .'|delete(*:1625)'
                            .'|admin\\-delete(*:1647)'
                            .'|cancel(*:1662)'
                        .')'
                    .')'
                .')'
                .'|/signalement/(?'
                    .'|new/(\\d+)(*:1699)'
                    .'|(\\d+)(*:1713)'
                    .'|(\\d+)/edit(*:1732)'
                    .'|(\\d+)/delete(*:1753)'
                .')'
                .'|/user/delete/(\\d+)(*:1781)'
                .'|/waitlist/([^/]++)/remove(*:1815)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        34 => [[['_route' => 'admin_coach_show', '_controller' => 'App\\Controller\\Admin\\AdminCoachController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        55 => [[['_route' => 'admin_coach_edit', '_controller' => 'App\\Controller\\Admin\\AdminCoachController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        77 => [[['_route' => 'admin_coach_delete', '_controller' => 'App\\Controller\\Admin\\AdminCoachController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        101 => [[['_route' => 'admin_domaine_show', '_controller' => 'App\\Controller\\Admin\\AdminDomaineController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        123 => [[['_route' => 'admin_domaine_edit', '_controller' => 'App\\Controller\\Admin\\AdminDomaineController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        146 => [[['_route' => 'admin_domaine_delete', '_controller' => 'App\\Controller\\Admin\\AdminDomaineController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        177 => [[['_route' => 'product_edit', '_controller' => 'App\\Controller\\AdminProductDashboardController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        197 => [[['_route' => 'product_delete', '_controller' => 'App\\Controller\\AdminProductDashboardController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        222 => [[['_route' => 'vendor_show', '_controller' => 'App\\Controller\\VendorController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        240 => [[['_route' => 'vendor_edit', '_controller' => 'App\\Controller\\VendorController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        260 => [[['_route' => 'vendor_delete', '_controller' => 'App\\Controller\\VendorController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        289 => [[['_route' => 'vendor_confirm_delete', '_controller' => 'App\\Controller\\VendorController::confirmDelete'], ['id'], ['GET' => 0], null, false, false, null]],
        315 => [[['_route' => 'vendor_flash_promo_activate', '_controller' => 'App\\Controller\\VendorController::activateFlashPromo'], ['id'], ['POST' => 0], null, false, false, null]],
        348 => [[['_route' => 'vendor_flash_promo_status', '_controller' => 'App\\Controller\\VendorController::flashPromoStatus'], ['id'], ['GET' => 0], null, false, false, null]],
        381 => [[['_route' => 'vendor_flash_promo_cancel', '_controller' => 'App\\Controller\\VendorController::cancelFlashPromo'], ['id'], ['POST' => 0], null, false, false, null]],
        419 => [[['_route' => 'vendor_flash_promo_ai_suggest', '_controller' => 'App\\Controller\\VendorController::aiSuggestFlashPromo'], ['id'], ['POST' => 0], null, false, false, null]],
        452 => [[['_route' => 'api_article_show', '_controller' => 'App\\Controller\\ArticleApiController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        470 => [[['_route' => 'api_article_increment_view', '_controller' => 'App\\Controller\\ArticleApiController::incrementView'], ['id'], ['PATCH' => 0], null, false, false, null]],
        495 => [[['_route' => 'api_article_readability', '_controller' => 'App\\Controller\\ArticleApiController::readability'], ['id'], ['GET' => 0], null, false, false, null]],
        520 => [[['_route' => 'api_article_ai_analyze', '_controller' => 'App\\Controller\\ArticleApiController::aiAnalyze'], ['id'], ['POST' => 0], null, false, false, null]],
        542 => [[['_route' => 'api_article_call_ai', '_controller' => 'App\\Controller\\ArticleApiController::callAi'], ['id'], ['POST' => 0], null, false, false, null]],
        581 => [[['_route' => 'api_coach_rating_stats', '_controller' => 'App\\Controller\\RatingController::getCoachStats'], ['id'], ['GET' => 0], null, false, false, null]],
        593 => [[['_route' => 'api_coach_rate', '_controller' => 'App\\Controller\\RatingController::rateCoach'], ['id'], ['POST' => 0], null, false, false, null]],
        604 => [[['_route' => 'api_coach_ratings_list', '_controller' => 'App\\Controller\\RatingController::getCoachRatings'], ['id'], ['GET' => 0], null, false, false, null]],
        632 => [[['_route' => 'article_show', '_controller' => 'App\\Controller\\ArticleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        648 => [[['_route' => 'article_edit', '_controller' => 'App\\Controller\\ArticleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        662 => [[['_route' => 'article_delete', '_controller' => 'App\\Controller\\ArticleController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        694 => [[['_route' => 'cart_add', '_controller' => 'App\\Controller\\CartController::add'], ['id'], ['POST' => 0], null, false, true, null]],
        714 => [[['_route' => 'cart_update', '_controller' => 'App\\Controller\\CartController::update'], ['id'], ['POST' => 0], null, false, true, null]],
        734 => [[['_route' => 'cart_remove', '_controller' => 'App\\Controller\\CartController::remove'], ['id'], ['POST' => 0], null, false, true, null]],
        756 => [[['_route' => 'app_coach_show', '_controller' => 'App\\Controller\\CoachController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        774 => [[['_route' => 'app_coach_edit', '_controller' => 'App\\Controller\\CoachController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        794 => [[['_route' => 'app_coach_delete', '_controller' => 'App\\Controller\\CoachController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        832 => [[['_route' => 'evenements_show', '_controller' => 'App\\Controller\\EvenementController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        848 => [[['_route' => 'evenement_edit', '_controller' => 'App\\Controller\\EvenementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        862 => [[['_route' => 'evenement_delete', '_controller' => 'App\\Controller\\EvenementController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        895 => [[['_route' => 'event_analyze', '_controller' => 'App\\Controller\\EvenementController::analyze'], ['id'], null, null, false, false, null]],
        923 => [[['_route' => 'admin_waitlist', '_controller' => 'App\\Controller\\WaitlistController::adminWaitlist'], ['id'], ['GET' => 0], null, false, false, null]],
        939 => [[['_route' => 'admin_waitlist_promote', '_controller' => 'App\\Controller\\WaitlistController::promote'], ['id'], ['POST' => 0], null, false, false, null]],
        963 => [[['_route' => 'evenement_show', '_controller' => 'App\\Controller\\EvenementFrontController::show'], ['id'], null, null, false, true, null]],
        986 => [[['_route' => 'evenement_add_commentaire', '_controller' => 'App\\Controller\\EvenementFrontController::addCommentaire'], ['id'], ['POST' => 0], null, false, false, null]],
        1007 => [[['_route' => 'waitlist_join', '_controller' => 'App\\Controller\\WaitlistController::join'], ['id'], ['POST' => 0], null, false, false, null]],
        1033 => [[['_route' => 'frontend_blog_show', '_controller' => 'App\\Controller\\FrontendBlogController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1053 => [[['_route' => 'frontend_blog_react', '_controller' => 'App\\Controller\\FrontendBlogController::react'], ['id'], ['POST' => 0], null, false, false, null]],
        1077 => [[['_route' => 'frontend_blog_reactions', '_controller' => 'App\\Controller\\FrontendBlogController::reactions'], ['id'], ['GET' => 0], null, false, false, null]],
        1096 => [[['_route' => 'frontend_blog_avis', '_controller' => 'App\\Controller\\FrontendBlogController::avis'], ['id'], ['GET' => 0], null, false, false, null]],
        1146 => [[['_route' => 'marketplace_edit_product', '_controller' => 'App\\Controller\\MarketplaceController::editProduct'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1161 => [[['_route' => 'marketplace_delete_product', '_controller' => 'App\\Controller\\MarketplaceController::deleteProduct'], ['id'], ['POST' => 0], null, false, false, null]],
        1177 => [[['_route' => 'marketplace_rate_product', '_controller' => 'App\\Controller\\MarketplaceController::rateProduct'], ['id'], ['POST' => 0], null, false, false, null]],
        1192 => [[['_route' => 'product_social_reviews', '_controller' => 'App\\Controller\\ReviewController::showReviewsPage'], ['id'], ['GET' => 0], null, false, false, null]],
        1229 => [[['_route' => 'marketplace_api_rate_shop', '_controller' => 'App\\Controller\\MarketplaceController::apiRateShop'], ['id'], ['POST' => 0], null, false, false, null]],
        1263 => [[['_route' => 'marketplace_api_favorites_toggle', '_controller' => 'App\\Controller\\MarketplaceController::toggleFavorite'], ['id'], ['POST' => 0], null, false, true, null]],
        1288 => [[['_route' => 'api_social_reviews', '_controller' => 'App\\Controller\\ReviewController::getReviewsJson'], ['slug'], ['GET' => 0], null, false, true, null]],
        1361 => [
            [['_route' => 'api_coach_availability', '_controller' => 'App\\Controller\\ReservationController::getCoachAvailability'], ['id'], ['GET' => 0], null, false, false, null],
            [['_route' => 'api_coach_set_availability', '_controller' => 'App\\Controller\\ReservationController::setAvailability'], ['id'], ['POST' => 0], null, false, false, null],
        ],
        1383 => [[['_route' => 'api_coach_reservations', '_controller' => 'App\\Controller\\ReservationController::getCoachReservations'], ['id'], ['GET' => 0], null, false, false, null]],
        1407 => [[['_route' => 'api_cancel_reservation', '_controller' => 'App\\Controller\\ReservationController::cancelReservation'], ['id'], ['POST' => 0], null, false, true, null]],
        1444 => [[['_route' => 'api_notification_read', '_controller' => 'App\\Controller\\ReservationController::markNotificationRead'], ['id'], ['POST' => 0], null, false, false, null]],
        1471 => [[['_route' => 'reservation_calendar_ics', '_controller' => 'App\\Controller\\ReservationController::downloadCalendarIcs'], ['id'], ['GET' => 0], null, false, false, null]],
        1507 => [[['_route' => 'reservation_event_thumb', '_controller' => 'App\\Controller\\ReservationEvenementController::eventThumb'], ['id'], ['GET' => 0], null, false, false, null]],
        1528 => [[['_route' => 'reservation_new', '_controller' => 'App\\Controller\\ReservationEvenementController::new'], ['id'], null, null, false, true, null]],
        1553 => [[['_route' => 'reservation_edit', '_controller' => 'App\\Controller\\ReservationEvenementController::edit'], ['id'], null, null, false, false, null]],
        1565 => [[['_route' => 'reservation_pay', '_controller' => 'App\\Controller\\ReservationEvenementController::pay'], ['id'], ['POST' => 0], null, false, false, null]],
        1598 => [[['_route' => 'reservation_payment_cancel', '_controller' => 'App\\Controller\\ReservationEvenementController::paymentCancel'], ['id'], null, null, false, true, null]],
        1625 => [[['_route' => 'reservation_delete', '_controller' => 'App\\Controller\\ReservationEvenementController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        1647 => [[['_route' => 'reservation_admin_delete', '_controller' => 'App\\Controller\\ReservationEvenementController::adminDelete'], ['id'], ['POST' => 0], null, false, false, null]],
        1662 => [[['_route' => 'reservation_cancel', '_controller' => 'App\\Controller\\WaitlistController::cancel'], ['id'], ['POST' => 0], null, false, false, null]],
        1699 => [[['_route' => 'signalement_new', '_controller' => 'App\\Controller\\SignalementArticleController::new'], ['id_article'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1713 => [[['_route' => 'signalement_show', '_controller' => 'App\\Controller\\SignalementArticleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1732 => [[['_route' => 'signalement_edit', '_controller' => 'App\\Controller\\SignalementArticleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1753 => [[['_route' => 'signalement_delete', '_controller' => 'App\\Controller\\SignalementArticleController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        1781 => [[['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['GET' => 0], null, false, true, null]],
        1815 => [
            [['_route' => 'admin_waitlist_remove', '_controller' => 'App\\Controller\\WaitlistController::remove'], ['id'], ['POST' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
