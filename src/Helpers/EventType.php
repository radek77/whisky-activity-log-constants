<?php
/**
 * Created by PhpStorm.
 * User: radek
 * Date: 06/06/17
 * Time: 13:04
 */

namespace AutodataGroup\WhiskyActivityLogConstants;

class EventType
{
    const GARAGE_CREATE_GARAGE                                    = 0;
    const GARAGE_CREATE_GARAGE_WITH_PRICE_OVERRIDE                = 1;
    const GARAGE_CREATE_GARAGE_WITH_PROMO_CODE                    = 2;
    const GARAGE_UPGRADE                                          = 3;
    const GARAGE_DOWNGRADE                                        = 4;
    const GARAGE_CANCELLATION                                     = 5;
    const GARAGE_CANCELLATION_WITH_PRO_RATA_REFUND                = 6;
    const GARAGE_CANCELLATION_WITH_FULL_REFUND                    = 7;
    const GARAGE_CANCELLATION_WITH_DATED_REFUND                   = 8;
    const GARAGE_CANCELLATION_WITH_NO_REFUND                      = 9;
    const GARAGE_DEFERRED_CANCELLATION_SET                        = 10;
    const GARAGE_DEFERRED_CANCELLATION_REINSTATE                  = 11;
    const GARAGE_USER_ADD                                         = 12;
    const GARAGE_USER_EDIT                                        = 13;
    const GARAGE_USER_DELETE                                      = 14;
    const GARAGE_UPDATE_DETAILS                                   = 15;
    const GARAGE_UPDATE_BILLING_INFO                              = 16;
    const GARAGE_UPDATE_INVOICE_INFO                              = 17;
    const GARAGE_DEFERRED_PLAN_CHANGE_SET                         = 18;
    const GARAGE_DEFERRED_PLAN_START_SET                          = 19;
    const GARAGE_DEFERRED_PAYMENT_CHANGE_SET                      = 20;
    const GARAGE_ADD_NEW_SUBSCRIPTION                             = 21;
    const GARAGE_ADD_NEW_SUBSCRIPTION_WITH_PRICE_OVERRIDE         = 22;
    const GARAGE_RESEND_ACTIVATION_EMAIL                          = 23;
    const GARAGE_RELOCATION                                       = 24;
    const GARAGE_RELOCATION_TO_DIRECT                             = 25;
    const GARAGE_USER_ACCESS_CHANGED                              = 26;
    const GARAGE_SUSPENDED                                        = 27;
    const GARAGE_UNSUSPENDED                                      = 28;
    const GARAGE_INTRO_CONVERSION                                 = 29;
    const GARAGE_INTRO_CONVERSION_UPGRADE                         = 30;
    const GARAGE_INTRO_CONVERSION_DOWNGRADE                       = 31;
    const GARAGE_PLAN_RENEWED                                     = 32;
    const GARAGE_PLAN_EXPIRED                                     = 33;
    const GARAGE_PAYMENT_CHANGED                                  = 34;
    const GARAGE_USERS_ACCESS_CHANGED                             = 35;
    const GARAGE_FAILED_PAYMENT                                   = 36;
    const GARAGE_RENEWAL_PAYMENT_SUCCESS                          = 37;
    const GARAGE_DUNNING_FAILURE_AFTER_RENEWAL                    = 38;
    const GARAGE_RENEWAL_PAYMENT_FAILED                           = 39;
    const GARAGE_FAILED_PAYMENT_AFTER_UPDATE_BILLING_INFO         = 40;
    const GARAGE_CAPRICORN_DEFERRED_DOWNGRADE_CANCELLED           = 41;
    const ENTSALES_CREATE_ENTSALES                                = 42;
    const ENTSALES_CREATE_GARAGE                                  = 43;
    const ENTSALES_CREATE_GARAGE_WITH_PRICE_OVERRIDE              = 44;
    const ENTSALES_CREATE_GARAGE_WITH_PROMO_CODE                  = 45;
    const ENTSALES_USER_ADD                                       = 46;
    const ENTSALES_USER_DELETE                                    = 47;
    const ENTSALES_UPDATE_COMPANY_INFO                            = 48;
    const ENTSALES_RELOCATION_FROM                                = 49;
    const ENTSALES_RELOCATION_TO                                  = 50;
    const ENTSALES_PLAN_ACTIVATE                                  = 51;
    const ENTSALES_PLAN_DEACTIVATE                                = 52;
    const ENTSALES_DISCOUNT_SET                                   = 53;
    const ENTSALES_DISCOUNT_UNSET                                 = 54;
    const ENTSALES_DISCOUNT_UPDATE                                = 55;
    const ENTSALES_DETAILS_UPDATE                                 = 56;
    const ENTSALES_INVOICE_AND_PAYMENT_LEVEL_CHANGED              = 57;
    const ENTSALES_SCHEDULED_PRICE_CHANGE_NEW_SUBSCRIPTION_ADD    = 58;
    const ENTSALES_SCHEDULED_PRICE_CHANGE_NEW_SUBSCRIPTION_UPDATE = 59;
    const ENTSALES_SCHEDULED_PRICE_CHANGE_NEW_SUBSCRIPTION_DELETE = 60;
    const ENTSALES_SCHEDULED_PRICE_CHANGE_NEW_SUBSCRIPTION_START  = 61;
    const ENTSALES_SCHEDULED_PRICE_CHANGE_RENEWAL_ADD             = 62;
    const ENTSALES_SCHEDULED_PRICE_CHANGE_RENEWAL_UPDATE          = 63;
    const ENTSALES_SCHEDULED_PRICE_CHANGE_RENEWAL_DELETE          = 64;
    const ENTSALES_SCHEDULED_PRICE_CHANGE_RENEWAL_START           = 65;
    const ENTSALES_SCHEDULED_PROMO_NEW_SUBSCRIPTION_ADD           = 66;
    const ENTSALES_SCHEDULED_PROMO_NEW_SUBSCRIPTION_UPDATE        = 67;
    const ENTSALES_SCHEDULED_PROMO_NEW_SUBSCRIPTION_DELETE        = 68;
    const ENTSALES_SCHEDULED_PROMO_NEW_SUBSCRIPTION_START         = 69;
    const ENTSALES_SCHEDULED_PROMO_NEW_SUBSCRIPTION_END           = 70;
    const ENTSALES_SCHEDULED_PROMO_RENEWAL_ADD                    = 71;
    const ENTSALES_SCHEDULED_PROMO_RENEWAL_UPDATE                 = 72;
    const ENTSALES_SCHEDULED_PROMO_RENEWAL_DELETE                 = 73;
    const ENTSALES_SCHEDULED_PROMO_RENEWAL_START                  = 74;
    const ENTSALES_SCHEDULED_PROMO_RENEWAL_END                    = 75;
}