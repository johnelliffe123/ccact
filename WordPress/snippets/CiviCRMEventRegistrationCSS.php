<?php

/**
 * @file        CiviCRMEventRegistrationCSS.php
 * @details     CSS to format the CiviCRM event list and registration pages.
 *              https://conservationcouncil.org.au/civicrm-event-List/ and related pages.
 * 
 *              Deployed via the CiviCRM Event Registration CSS snippet.
 * 
 * @author      John Elliffe
 * @date        2026-09-14
 * @version     1.0.0
 */

add_action( 'wp_head', function() {

    // Detect clean URLs, e.g. /civicrm/event/register
    $is_civi_event = (
        strpos( $_SERVER['REQUEST_URI'], 'civicrm-event-List' ) !== false ||
        strpos( $_SERVER['REQUEST_URI'], '/civicrm/event/' ) !== false );

    if ( ! $is_civi_event ) {
        return;
    }
    ?>

    <style id="civicrm-event-list-css">
    /*** CiviCRM Event List Page ********************************************/    

    .crm-container h4.af-title {
    font-weight: 700 !important;
    font-size: 30px !important;
    padding-top: 20px;
    color: #b2d235 !important;
    }

    .crm-container ul li {
    margin-top: 40px;
    display: grid;
    grid-template-columns: 3fr 1fr;
    }
    .crm-search-col-type-field {
    grid-column: 1;
    line-height: 1.4em;
    margin-bottom: 10px;
    margin-top: 10px
    }
    .crm-search-col-type-image {
    grid-column: 2;
    grid-row: 1 / 7;
    place-self: center;
    }
    @media (max-width: 980px) {
        .crm-search-col-type-image {
        grid-column: 1;
        grid-row: 3;
        place-self: center;
    }
    }
    /* date */
    .crm-search-col-type-field:nth-child(1) {
    font-size: 18px;
    font-weight: 600;
    }
    /* title */
    .crm-container .crm-search-col-type-field:nth-child(3) a {
    font-size: 25px;
    font-weight: 700;
    text-decoration: underline !important;
    text-decoration-thickness: 1px !important;
    }
    .crm-container .crm-search-col-type-field:nth-child(3) a:hover {
    text-decoration-thickness: 2px !important;
    }

    /* address */
    .crm-container .crm-search-col-type-field:nth-child(5) {
    margin-bottom: 0;
    line-height: 1.2em;
    }
    .crm-container .crm-search-col-type-field:nth-child(6) {
    margin-bottom: 0;
    margin-top: 0;
    }
    .crm-container .crm-search-col-type-field:nth-child(7) {
    margin-top: 0;
    line-height: 1.2em;
    }

    </style>


    <style id="civicrm-event-registration-css">
    /*** CiviCRM Event Registraion Pages **********************************/

    .crm-event-manage-tab-actions-ribbon {
    display: none;
    }
    .crm-event-info-form-block,
    .crm-event-register-form-block,
    .crm-event-confirm-form-block,
    .crm-event-thankyou-form-block {
    margin: 2vw 10vw;
    }
    .event-info,
    .crm-event-confirm-form-block {
    display: grid;
    grid-template-columns: 25% auto 25% 12%;
    }

    .crm-actionlinks-top {
    grid-row: 1;
    grid-column: 4;
    }
    /* the event details image */
    .crm-event-info-form-block table {
    grid-row: 1;
    grid-column: 1 / 4;
    }
    .event_description-section {
    grid-row: 3;
    grid-column: 1 / 4;
    margin-bottom: 20px !important;
    margin-right: 2vw;
    }
    .event_fees-section {
    grid-row: 5;
    grid-column: 1 / 3;
    }
    .event_date_time-section {
    grid-row: 6;
    grid-column: 1 / 3;
    }
    .event_address-section {
    grid-row: 7;
    grid-column: 1 / 3;
    }
    .event_contact-section {
    grid-row: 8;
    grid-column: 1 / 3;
    }
    .iCal_links-section {
    grid-row: 10;
    }
    .crm-actionlinks-bottom {
    grid-row: 10;
    grid-column: 4;
    }
    .event_map-section {
    grid-row: 5 / 10;
    grid-column: 2 / 5;
    justify-self: center;
    }
    .crm-socialnetwork {
    grid-row: 11;
    grid-column: 2 / 4;
    }
    .civicrm-back-button {
    grid-row: 12;
    grid-column: 1;
    }

    .continue_message-section {
    grid-row: 1;
    grid-column: 1 / 4;
    }
    .participant_info-group {
    grid-row: 2;
    grid-column: 1 / 4;
    }
    .event_info-group {
    grid-row: 3;
    grid-column: 1 / 4;
    }
    .event_fees-group {
    grid-row: 4;
    grid-column: 1 / 4;
    }

    /**
    .crm-button_qf_Confirm_next {
    grid-row: 4;
    grid-column: 4;
    }
    **/
    div.crm-buttons {
    grid-column: 4;
    }
    .crm-submit-buttons {
    grid-row: 5;
    grid-column: 1 / 4;
    display: grid; /** subgrid for the buttons **/
    grid-template-columns: 15% auto 20%;
    }
    button#_qf_Confirm_back-bottom {
    grid-column: 1;
    }
    button#_qf_Register_upload-bottom,
    button#_qf_Confirm_next-bottom {
    grid-column: 3;
    justify-self: end;
    margin-right: 0;
    }

    @media (max-width: 980px) {
    .event-info {
        display: grid;
        grid-template-columns: 80% auto;
    }

    .crm-actionlinks-top {
        grid-row: 1;
        grid-column: 2;
    }
    .crm-event-info-form-block table {
        grid-row: 2;
    }
    .event_description-section {
        grid-row: 3;
        grid-column: 1 / 3;
        margin-bottom: 10px;
    }
    .event_fees-section {
        grid-row: 5;
    }
    .event_date_time-section {
        grid-row: 6;
    }
    .event_address-section {
        grid-row: 7;
    }
    .event_contact-section {
        grid-row: 8;
    }
    .iCal_links-section {
        grid-row: 10;
    }
    .crm-actionlinks-bottom {
        grid-row: 11;
        grid-column: 2;
    }
    .event_map-section {
        grid-row: 12;
        grid-column: 1 / 3;
    }
    .crm-socialnetwork {
        grid-row: 13;
        grid-column: 1 / 3;
    }
    .civicrm-back-button {
        grid-row: 14;
        grid-column: 1;
    }
    }

    .event_summary-section {
    display: none;
    }

    .action-link.register_link-section {
    float: right;
    margin-left: 0;
    margin-bottom: 20px;
    }

    .crm-section .label {
    font-weight: 600;
    }
    .crm-submit-buttons button.crm-button,
    .crm-container a.crm-register-button.button,
    crm-container a.civicrm-back-button {
    font-size: 16px;
    font-weight: 500;
    text-shadow: none;
    background-color: #b2d235;
    padding: 8px 20px;
    margin-top: 10px;
    border: none;
    }

    #crm-container.event-info.crm-section {
    margin-top: 10px;
    margin-bottom: 5px;
    }

    #crm-main-content-wrapper h1 {
    font-size: 35px;
    font-weight: 600;
    color: #b2d235;
    text-align: center;
    padding-top: 20px;
    padding-bottom: 5px;
    }
    @media (max-width: 980px) {
    #crm-main-content-wrapper h1 {
        font-size: 30px !important;
    }
    }
    .crm-section td,
    .event-info.crm-section p {
    font-size: 15px;
    }
    @media (max-width: 980px) {
    .crm-section td,
    .event-info .crm-section p,
    .crm-section .content {
        font-size: 14px;
        line-height: 1.4em;
    }
    }

    .crm-event-info-form-block summary {
    display: none;
    }
    .crm-info-panel .label {
    display: none;
    }
    .crm-container table.crm-info-panel {
    border: none;
    }
    .crm-container table.crm-info-panel td,
    .crm-container table.no-border td {
    background-color: transparent;
    border: none;
    text-align: center;
    font-size: 15px;
    }
    .crm-container table.form-layout {
    font-size: 15px;
    line-height: 18px;
    }
    .crm-container table.form-layout td:first-child {
    font-weight: 600;
    width: 15%;
    }
    .crm-info-panel img {
    width: auto;
    max-height: 260px;
    }
    .crm-container details.crm-accordion-bold > .crm-accordion-body {
    border: none;
    }
    .content > div.olMap {
    max-height: 260px;
    }
    .event-info .crm-section.event_map-section .content {
    padding-top: 25px !important;
    font-size: 14px !important;
    margin-left: 0;
    }

    button#_qf_Confirm_back-top {
    display: none !important;
    }
    button#_qf_Confirm_next-top {
    display: none !important;
    }

    .crm-container div.display-block {
    margin-left: 0;
    }

    /* hide the "Map this Address" link on the event confirmation page - until we know why some maps don't display*/
    .crm-event-thankyou-form-block .event_info-group tr:nth-of-type(3) a,
    .crm-event-confirm-form-block .event_info-group tr:nth-of-type(3) a {
    display: none;
    }

    /* force the select boxes to be wider on the event registration page */
    .crm-form-select {
    width: 400px !important;
    }

    </style>

    <?php
}, 100 );
