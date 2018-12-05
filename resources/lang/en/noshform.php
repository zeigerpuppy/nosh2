<?php

return [

    /*
    |--------------------------------------------------------------------------
    | NOSH Form Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used for NOSH Form pages
    |
    */


    // Address Book
    "select_electronic_order" => "Select Electronic Order Interface",
    "fax" => "Fax",
    "facility" => "Facility",
    "firstname" => "First Name",
    "lastname" => "Last Name",
    "prefix" => "Prefix",
    "suffix" => "Suffix",
    "facility" => "Facility",
    "specialty" => "Specialty",
    "npi" => "NPI",
    "street_address1" => "Address",
    "street_address2" => "Address 2",
    "country" => "Country",
    "city" => "City",
    "state" => "State",
    "zip" => "Zip",
    "phone" => "Phone",
    "comments" => "Comments",
    "ordering_id" => "Provider/Clinic Identity",
    "electronic_order" => "Electronic Order Interface",

    // Alerts
    "alert" => "Alert",
    "alert_provider" => "User or Provider to Alert",
    "alert_description" => "Description",
    "alert_date_active" => "Due Date",
    "alert_send_message" => "Message to Patient about Alert",
    "no" => "No",
    "yes" => "Yes",
    "message_sent" => "Message Sent",
    "alert_reason_not_complete" => "Reason",
    "alert_active" => "Active",
    "alert_pending" => "Pending",
    "alert_pending_results" => "Pending Results",
    "alert_completed" => "Completed",
    "alert_canceled" => "Canceled",
    "alerts" => "Alerts",
    "mark_alert_incomplete" => "Mark Alert as Incomplete",
    "marked_completed" => "marked as completed",
    "new_alert" => "New Alert",

    // Allergies
    "mild" => "Mild",
    "moderate" => "Moderate",
    "severe" => "Severe",
    "allergies_med" => "Substance or Medication",
    "allergies_reaction" => "Reaction",
    "allergies_severity" => "Severity",
    "meds_ndcid" => "RXNorm ID",
    "allergies_date_active" => "Date Active",
    "notes" => "Notes",
    "label" => "Sensitive Label",
    "allergies_active" => "Active",
    "allergies_inactive" => "Inactive",
    "allergies" => "Allergies",
    "allergy" => 'Allergy',
    "allergies_message_action_encounter" => "Alleriges marked as reviewed for encounter",
    "nkda" => "No known allergies",

    // Billing
    "cpt" => "Procedure Code",
    "cpt_charge" => "Procedure Charge",
    "unit" => "Unit(s)",
    "modifier" => "Modifier",
    "dos_f" => "Date of Service From",
    "dos_t" => "Date of Service To",
    "icd_pointer" => "Diagnosis Pointer",
    "billing_message_action_delete" => "Miscellaneous bill deleted",
    "billing_message_action_update" => "Miscellaneous bill updated",
    "billing_message_action_added" => "Miscellaneous bill added",
    "billing_add_misc" => "Add Miscellaneous Bill",
    "billing_update_misc" => "Update Miscellaneous Bill",
    "date_of_charge" => "Date of Charge",
    "charge_amount" => "Charge Amount",
    "misc_reason" => "Reason",
    "save" => "Save",
    "cancel" => "Cancel",
    "added" => "added",
    "updated" => "updated",
    "inactivated" => "inactivated",
    "reactivated" => "reactivated",
    "deleted" => "deleted",
    "prescribed" => "prescribed",
    "reactivated" => "reactivated",
    "refilled" => "refilled",
    "billing" => "Billing",

    // Calendar
    "visit_type" => "Visit Type",
    "duration" => "Duration",
    "classname" => "Color",
    "provider_id" => "Provider",
    "minutes" => "Minutes",
    "interval_default" => "Default (48 hours prior)",
    "hours_prior" => "hours prior",
    "cellular_phone" => "Cellular Phone",
    "repeat_day" => "Day",
    "repeat_start_time" => "Start Time",
    "repeat_end_time" => "End Time",
    "schedule_reason" => "Reason",
    "schedule_title" => "Title",

    // Color
    "colorblue" => "Blue",
    "colorred" => "Red",
    "colororange" => "Orange",
    "coloryellow" => "Yellow",
    "colorpurple" => "Purple",
    "colorbrown" => "Brown",
    "colorblack" => "Black",

    // Demographics
    "nickname" => "Nickname",
    "middle" => "Middle Name",
    "title" => "Title",
    "DOB" => "Date of Birth",
    "sex" => "Gender",
    "patient_id" => "Patient ID",
    "ss" => "SSN",
    "race" => "Race",
    "marital_status" => "Marital Status",
    "partner_name" => "Spouse/Partner Name",
    "employer" => "Employer",
    "ethnicity" => "Ethnicity",
    "caregiver" => "Careiver(s)",
    "status" => "Status",
    "referred_by" => "Referred By",
    "language" => "Preferred Language",
    "email" => "Email",
    "phone_home" => "Home Phone",
    "phone_work" => "Work Phone",
    "phone_cell" => "Mobile",
    "emergency_contact" => "Emergency Contact",
    "reminder_method" => "Appointment Reminder Method",
    "reminder_interval" => "Appointment Reminder Interval",
    "relationship" => "Relationship",
    "preferred_provider" => "Preferred Provider",
    "preferred_pharmacy" => "Preferred Pharmacy",
    "other1" => "Other Field 1",
    "other2" => "Other Field 2",
    "creditcard_number" => "Card Number",
    "creditcard_expiration" => "Expiration",
    "creditcard_key" => "CVV Code",
    "select_credit_card" => "Select a credit card type",
    "mastercard" => "MasterCard",
    "visa" => "Visa",
    "discover" => "Discover",
    "amex" => "American Express",
    "male" => "Male",
    "female" => "Female",
    "undifferentiated" => "Undifferentiated",
    "physician" => "Physician",
    "assistant" => "Assistant",
    "patient" => "Patient",
    "single" => "Single",
    "married" => "Married",
    "commonlaw" => "Common law",
    "domesticpartner" => "Domestic partner",
    "registereddomesticpartner" => "Registered domestic partner",
    "interlocutory" => "Interlocutory",
    "livingtogether" => "Living together",
    "legallyseparated" => "Legally Separated",
    "divorced" => "Divorced",
    "separated" => "Separated",
    "annulled" => "Annulled",
    "widowed" => "Widowed",
    "other" => "Other",
    "unknown" => "Unknown",
    "unmarried" => "Unmarried",
    "unreported" => "Unreported",
    "test_reminder" => "Test Reminder",
    "add_pharmacy" => "Add New Pharmacy",
    "credit_card" => "Credit Card",
    "guardian_import" => "Copy from Patient",
    "name_identity" => "Name and Identity",
    "contacts" => "Contacts",
    "guardians" => "Guardians",
    "register_portal" => "Register to Portal",
    "demographics" => "Demographics",
    "none" => "None",
    "photo_added" => "Photo added",
    "upload_photo" => "Upload Photo",
    "registration_code" => "Registration Code",
    "add_patient_photo" => "Add Patient Photo",

    // Documents
    "laboratory" => "Laboratory",
    "imaging" => "Imaging",
    "cardiopulmonary" => "Cardiopulmonary",
    "endoscopy" => "Endoscopy",
    "referrals" => "Referrals",
    "past_records" => "Past Records",
    "other_forms" => "Other Forms",
    "letters" => "Letters",
    "education" => "Education",
    "ccda" => "CCDAs",
    "ccr" => "CCRs",
    "from" => "From",
    "type" => "Type",
    "description" => "Description",
    "date" => "Date",
    "document" => "Document",
    "generate_letter" => "Generate Letter",
    "letter_to" => "To",
    "letter_body" => "Letter Body",
    "save_print" => "Save and Print",
    "letter1" => "This letter is in regards to ",
    "letter2" => "who is a patient of mine",
    "letter_for" => "Letter for",
    "document_upload" => "Upload A File",
    "back" => "Back",
    "all" => "All",
    "documents" => "Documents",
    "upload_document" => "Upload Document",
    "add_patient_education" => "Add Patient Education",
    "upload_ccda" => "Upload Consolidated Clinical Document (C-CDA)",
    "upload_ccr" => "Upload Continuity of Care Record (CCR)",
    "new_letter" => "New Letter",
    "new_document" => "New Document",

    // Encounters
    "medical_encounter" => "Medical Encounter",
    "phone_encounter" => "Phone Encounter",
    "virtual_encounter" => "Virtual Encounter",
    "standardpsych" => "Annual Psychiatric Evaluation",
    "standardpsych1" => "Psychiatric Encounter",
    "clinicalsupport" => "Clinical Support Visit",
    "standardmtm" => "Medical Therapy Management Encounter",
    "encounters" => "Encounters",
    "new_encounter" => "New Encounter",

    // Family history
    "father" => "Father",
    "mother" => "Mother",
    "brother" => "Brother",
    "sister" => "Sister",
    "son" => "Son",
    "daughter" => "Daughter",
    "spouse" => "Spouse",
    "partner" => "Partner",
    "paternal_uncle" => "Paternal Uncle",
    "paternal_aunt" => "Paternal Aunt",
    "maternal_uncle" => "Maternal Uncle",
    "maternal_aunt" => "Maternal Aunt",
    "maternal_grandfather" => "Maternal Grandfather",
    "maternal_grandmother" => "Maternal Grandmother",
    "paternal_grandfather" => "Paternal Grandfather",
    "paternal_grandmother" => "Paternal Grandmother",
    "alive" => "Alive",
    "deceased" => "Deceased",
    "name" => "Name",
    "living_status" => "Living Status",
    "medical_history" => "Medical History",

    // Care Coordination
    "primary_care_provider" => "Primary Care Provider",
    "select_records" => "Select Records to Print",
    "download_ccda" => "Download CCDA",
    "print_all_records" => "Print All Records",
    "print_all_1year" => "Print All Records from Past Year",
    "print_queue_all" => "All Records to Print Queue",
    "print_queue_1year" => "All Records from Past Year to Print Queue",
    "fax_all_records" => "Fax All Records",
    "fax_all_1year" => "Fax All Records from Past Year",
    "or_fax" => " or Fax",
    "fax_queue_all" => "All Records to Fax Queue",
    "fax_queue_1year" => "All Records from Past Year to Fax Queue",
    "hippa_reason" => "Reason",
    "hippa_provider" => "Release To",
    "hippa_role" => "Provider Role",
    "hippa_date_release" => "Date of Records Release",
    "nosh_action" => "Action after Saving",
    "select_option" => "Select Option",
    "general_medical_records" => "General Medical Records",
    "specific" => "Specific",
    "history_physical" => "History and Physical",
    "medications_therapy" => "Medications and Therapy",
    "lab_report" => "Lab, Imaging, or Cardiopulmonary Report",
    "operative_report" => "Operative Report",
    "accident_injury" => "Accident or Injury",
    "immunizations" => "Immunizations",
    "print" => "Print",
    "add_print_queue" => "Add to Print Queue",
    "add_fax_queue" => "Add to Fax Queue",
    "request_reason" => "Reason",
    "request_type" => "Type",
    "request_to" => "Records Release To",
    "hippa_date_request" => "Date of Request",
    "history_physical" => "Date of History and Physical",
    "lab_type" => "Type of Test",
    "op" => "Type of Operation",
    "accident_f" => "Date of Injury/Accident (from)",
    "accident_t" => "Date of Injury/Accident (to)",
    "received" => "Received",
    "hippa_request" => "Records Request",
    "hippa" => "Records Release",
    "hippas" => "Records Releases",
    "hippa_requests" => "Records Requests",
    "coordination_of_care" => "Coordination of Care",
    "upload_ccda" => "Upload Consolidated Clinical Document (C-CDA)",
    "upload_ccr" => "Upload Continuity of Care Record (CCR)",
    "add_address_book" => "Add New Address Book Entry",
    "chart_queue" => "Select Records",
    "actions" => "Actions",
    "new_coordination_care" => "New Coordination of Care Transaction",

    // Immunizations
    "do_nothing" => "Do Nothing",
    "pull_inventory" => "Pull from Vaccine Inventory",
    "first" => "First",
    "second" => "Second",
    "third" => "Third",
    "fourth" => "Fourth",
    "fifth" => "Fifth",
    "right" => "Right",
    "left" => "Left",
    "deltoid" => "Deltoid",
    "gluteus" => "Gluteus",
    "thigh" => "Thigh",
    "imm_immunization" => "Immunization",
    "imm_sequence" => "Sequence",
    "imm_elsewhere" => "Given Elsewhere",
    "imm_vis" => "VIS Given",
    "imm_body_site" => "Body Site",
    "imm_route" => "Route",
    "imm_dosage" => "Dosage",
    "imm_dosage_unit" => "Dosage Unit",
    "imm_lot" => "Lot Number",
    "imm_manufacturer" => "Manufacturer",
    "imm_brand" => "Brand",
    "imm_expiration" => "Expiration Date",
    "imm_date" => "Date Active",
    "imm_cvxcode" => "CVX Code",
    "immunization" => "Immunization",
    "immunizations" => "Immunizations",
    "date_purchase" => "Date of Purchase",
    "temp" => "Temperature",
    "date_time" => "Date and Time",
    "action_range" => "Action if Out of Range",
    "vaccine_inventory" => "Vaccine Inventory",
    "past_vaccine_inventory" => "Past Vaccine Inventory",
    "vaccine_temperatures" => "Vaccine Temperatures",
    "no_vaccines" => "No vaccines",
    "action" => "Action",
    "no_data" => "No data",
    "add_temperature" => "Add Temperatre",
    "vaccines" => "Vaccines",

    // Insurance
    "primary" => "Primary",
    "secondary" => "Secondary",
    "unassigned" => "Unassigned",
    "self" => "Self",
    "spouse" => "Spouse",
    "child" => "Child",
    "insurance_plan_name" => "Insurance Provider",
    "insurance_order" => "Insurance Priority",
    "insurance_id_num" => "ID Number",
    "insurance_group" => "Group Number",
    "insurance_insu_lastname" => "Insured Last Name",
    "insurance_insu_firstname" => "Insured First Name",
    "insurance_insu_dob" => "Insured Date of Birth",
    "insurance_insu_address" => "Insured Address",
    "insurance_insu_city" => "Insured City",
    "insurance_insu_state" => "Insured State",
    "insurance_insu_zip" => "Insured Zip",
    "insurance_insu_phone" => "Insured Phone",
    "insurance_copay" => "Copay",
    "insurance_deductible" => "Deductible",
    "comments" => "Comments",
    "insurance" => "Insurance",

    //Issues
    "pl" => "Problem List",
    "mh" => "Medical History",
    "sh" => "Surgical History",
    "issue" => "Condition",
    "type" => "Type",
    "issue_date_active" => "Date Active",
    "inactive" => "Inactive",
    "active" => "Active",
    "problems" => "Problems",
    "problem" => "Problem",
    "past" => "Past",
    "medical_history" => "Medical History",
    "surgical_history" => "Surgical History",
    "surgeries" => "Surgeries",
    "conditions" => "Conditions",
    "add_problem" => "Add Problem",
    "add_medical_history" => "Add Medical History",
    "add_surgical_history" => "Add Surgical History",
    "copy_all_problems" => "Copy All Problems to Assessment",
    "copy_all_medical_history" => "Copy All Medical History to Assessment",
    "copy_all_surgical_history" => "Copy All Surgical History to Assessment",
    "reviewed_by" => "Reviewed by",
    "on" => "on",
    "issue_message_action_encounter" => "Past medical and surgical history marked as reviewed for encounter",
    "obtained_fhir" => "Obtained via FHIR from",
    "add" => "Add",
    "edit" => "Edit",
    "issue" => "Issue",
    "moved_to" => "moved to",

    // Messaging
    "subject" => "Subject",
    "patient_name" => "Concerning this Patient (optional)",
    "message_to" => "To",
    "cc" => "CC",
    "body" => "Message",
    "inbox" => "Inbox",
    "drafts" => "Drafts",
    "outbox" => "Sent Messages",
    "scans" => "Scans",
    "faxes" => "Faxes",
    "faxes_draft" => "Draft Faxes",
    "faxes_sent" => "Sent Faxes",
    "new_message" => "New Message",
    "new_fax" => "New Fax",
    "messaging" => "Messaging",
    "messaging_add_photo" => "Upload A Photo/Image",
    "page_saved" => "Page saved",
    "discard_page" => "Discard Page",
    "annotate_document" => "Annotate Document",
    "process_document" => "Process Document",
    "document_saved_chart" => "Document saved in patient chart",
    "ready_to_fax" => "ready to be faxed",
    "documents_from" => "From",
    "documents_type" => "Type",
    "documents_desc" => "Description",
    "documents_date" => "Date",
    "save_download" => "Save and Download",
    "save_fax" => "Save and Fax",
    "messaging_editdoc_process" => "Process and Assign Document",
    "messaging_export" => "Message exported to the chart as a telephone message",
    "internal_message" => "Internal messaging with patient",
    "internal_message_on" => "Internal messaging with patient on",
    "saved_as_draft" => "saved as draft",
    "faxsubject" => "Subject",
    "faxcoverpage" => "Coverpage",
    "faxmessage" => "Coverpage Message",
    "save_as_draft" => "Save as Draft",
    "add_recipient" => "Add Recipient",
    "add_page" => "Add Page or Document",
    "fax_details" => "Fax Details - Job",
    "faxrecipient" => "Recipient",
    "faxnumber" => "Fax Number",
    "new_patient_messaging" => "New Message to Patient",
    "from1" => "from",

    // Orders
    "save_only" => "Save Only",
    "orders_labs" => "Lab Test(s)",
    "orders_radiology" => "Imaging Test(s)",
    "orders_cp" => "Cardiopulmonary Test(s)",
    "orders_referrals" => "Referral Details",
    "diagnosis_codes" => "Diagnosis Codes",
    "choose_specialty" => "Choose Specialty",
    "referral_specialty" => "Specialty",
    "referral" => "Referral",
    "provider" => "Provider",
    "orders_pending_date" => "Order Pending Date",
    "orders_notes" => "Notes about Order",
    "order" => "Order",
    "results_pending" => "results pending",
    "laboratory_results_pending" => "Laboratory results pending",
    "radiology_results_pending" => "Radiology results pending",
    "cardiopulmonary_results_pending" => "Cardiopulmonary results pending",
    "referral_pending" => "Referral pending",
    "laboratory_orders" => "Laboratory Orders",
    "imaging_orders" => "Imaging Orders",
    "cardiopulmonary_orders" => "Cardiopulmonary Orders",
    "need_obtain" => "NEED TO OBTAIN",
    "sent_to" => " sent to ",
    "pending_orders" => "Pending Orders",
    "add_lab_order" => "Add Lab Order",
    "add_imaging_order" => "Add Imaging Order",
    "add_cardiopulmonary_order" => "Add Cardiopulmonary Order",
    "add_referral" => "Add Referral",
    "encounter_order" => "Creating an encounter first to add a new order",
    "addendum_order" => "Creating an addendum first to edit this order",
    "radiology" => "Radiology",
    "add_new" => "Add New",

    // Other History
    "oh_sh" => "Social History",
    "sexuallyactive" => "Sexually Active",
    "oh_diet" => "Diet",
    "oh_physical_activity" => "Physical Activity",
    "oh_employment" => "Employment/School",
    "oh_etoh" => "Alcohol Use",
    "tobacco" => "Tobacco Use",
    "oh_tobacco" => "Tobacco Use Details",
    "oh_drugs" => "Illicit Drug Use",
    "oh_psychosocial" => "Psychosocial History",
    "oh_developmental" => "Developmental History",
    "oh_medtrials" => "Past Medication Trials",
    "lifestyle" => "Lifestyle",
    "habits" => "Habits",
    "mental_health" => "Mental Health",
    "social_history_encounter" => "Social history marked as reviewed for encounter",
    "social_history" => "Social History",

    // Practice
    "practice_name" => "Practice Name",
    "website" => "Website",
    "patient_portal" => "Patient Portal Web Address",
    "primary_contact" => "Primary Contact",
    "practice_npi" => "Practice NPI",
    "practice_medicare" => "Practice Medicare Number",
    "tax_id" => "Practice Tax ID Number",
    "default_pos_id" => "Default Practice Location",
    "documents_dir" => "Documents Directory",
    "weight_unit" => "Weight Unit",
    "height_unit" => "Height Unit",
    "temp_unit" => "Temperature Unit",
    "hc_unit" => "Head Circumference Unit",
    "encounter_template" => "Default Encounter Template",
    "additional_message" => "Additional Message for Appointment Reminders",
    "reminder_interval" => "Appointment Reminder Interval",
    "1_week" => "1 week",
    "2_weeks" => "2 weeks",
    "1_month" => "1 month",
    "2_months" => "2 months",
    "3_months" => "3 months",
    "6_months" => "6 months",
    "1_year" => "1 year",
    "fax_type" => "Fax Integration Enabled",
    "phaxio" => "Phaxio",
    "phaxio_api_key" => "Phaxio API Key",
    "phaxio_api_secret" => "Phaxio API Secret",
    "birthday_extension" => "Birthday Message Enabled",
    "birthday_message" => "Birthday Message",
    "appointment_extension" => "Appointment Reminder Enabled",
    "appointment_interval" => "Appointment Interval (minimum time lapsed from last appointment)",
    "appointment_interval1" => "Appointment Interval",
    "appointment_message" => "Continuing Care Reminder Message",
    "sms_url" => "SMS URL",
    "weekends" => "Include Weekends in the Schedule",
    "minTime" => "First hour/time that will be displayed on the schedule",
    "maxTime" => "Last hour/time that will be displayed on the schedule",
    "timezone" => "Timezone",
    "open_at" => "open at",
    "close_at" => "close at",
    "monday" => "Monday",
    "tuesday" => "Tuesday",
    "wednesday" => "Wednesday",
    "thursday" => "Thursday",
    "friday" => "Friday",
    "saturday" => "Saturday",
    "sunday" => "Sunday",
    "close_at" => "close at",
    "practice_information" => "Practice Information",
    "practice_settings" => "Practice Settings",
    "extensions" => "Extensions",
    "practice_logo" => "Practice Logo",
    "lbs" => "Pounds",
    "kg" => "Kilograms",
    "F" => "Fahrenheit",
    "C" => "Celsius",
    "in" => "Inches",
    "cm" => "Centimeters",
    "birthday_message_desc" => "The birthday message sent out will appear like this:",
    "sms_message" => "SMS message:",
    "continue_care_desc" => "The continuing care reminder message sent out will appear like this:",
    "practice_setup" => "Practice Setup",
    "practice_logo_updated" => "Practice logo updated",
    "practice_logo_upload" => "Upload Practice Logo",
    "locale" => "Locale",

    // providers
    "license" => "License Number",
    "license_country" => "Country Licensed",
    "license_state" => "State Licensed",
    "npi_taxonomy" => "NPI Taxonomy",
    "upin" => "UPIN",
    "dea" => "DEA Number",
    "medicare" => "Medicare Number",
    "tax_id" => "Tax ID Number",
    "rcopia_username" => "rCopia Username",
    "schedule_increment" => "Time increment for schedule (minutes)",
    "schedule_notification" => "Patient Portal Schedule Notifications To",

    // Medications
    "eie" => "Entered medication in error process complete",
    "electronically_sign" => "Electronically Sign",
    "add_print_queue_one" => "Add to Print Queue, Combined In One Page",
    "add_fax_queue_one" => "Add to Fax Queue, Combined In One Page",
    "rxl_medication" => "Medication",
    "rxl_dosage" => "Dosage",
    "rxl_dosage_unit" => "Dosage Unit",
    "rxl_sig" => "Sig",
    "rxl_route" => "Route",
    "rxl_frequency" => "Frequency",
    "rxl_instructions" => "Special Instructions",
    "rxl_reason" => "Reason",
    "rxl_date_active" => "Date Active",
    "rxl_ndcid" => "NDC ID",
    "rxl_days" => "Duration (days)",
    "rxl_quantity" => "Quantity",
    "rxl_refill" => "Refills",
    "daw" => "Dispense As Written",
    "rxl_dea" => "DEA Number on Prescription",
    "notification" => "Notification To (SMS or Email)",
    "medication" => "Medication",
    "new" => "New",
    "refill" => "Refill",
    "prescription" => "Prescription",
    "encounter_prescription" => "Creating an encounter first to add a prescription",
    "goodrx" => "GoodRX",
    "medications" => "Medications",
    "prescribe" => "Prescribe",
    "medication_encounter" => "Medications marked as reviewed for encounter",

    // Supplements
    "pull_inventory1" => "Pull from Supplements Inventory",
    "sup_supplement" => "Supplement",
    "sup_dosage" => "Dosage",
    "sup_dosage_unit" => "Dosage Unit",
    "sup_sig" => "Sig",
    "sup_route" => "Route",
    "sup_frequency" => "Frequency",
    "sup_instructions" => "Special Instructions",
    "sup_reason" => "Reason",
    "sup_date_active" => "Date Active",
    "supplements" => "Supplements",
    "supplement_encounter" => "Supplements marked as reviewed for encounter",
    "supplement" => "Supplement",
    "sup_description" => "Supplement Description",
    "sup_strength" => "Strength",
    "sup_manufacturer" => "Manufacturer",
    "quantity1" => "Quantity",
    "sup_charge" => "Charge",
    "sup_cpt" => "Procedure Code",
    "sup_expiration" => "Expiration Date",
    "date_purchase" => "Date of Purchase",
    "supplement_inventory" => "Supplement Inventory",
    "supplement_inventory_past" => "Past Supplement Inventory",
    "configure_sales_tax" => "Configure Sales Tax",
    "no_supplements" => "No supplements",
    "sales_tax" => "Sales Tax %",
    "sales_tax_saved" => "Sales Tax saved",

    // Telephone messages
    "internal_message_sent" => "Internal message sent",
    "t_messages" => "Messages",
    "new_t_message" => "New Telephone Message",
    "t_messages_subject" => "Subject",
    "t_messages_message" => "Message",
    "t_messages_dos" => "Date of Message",
    "t_messages_to" => "Assign To",
    "t_messages_from" => "From",
    "t_message" => "Telephone Message",
    "add_telephone_visit" => "Add Telephone Visit",
    "t_messages_list" => "Telephone Messages",
    "images" => "Images",
    "add_tags" => "Add Tags",

    // Test results
    "new_tests" => "New Test Results",
    "select_type" => "Select Type",
    "test_type" => "Type",
    "test_name" => "Test Name",
    "test_result" => "Result",
    "test_units" => "Result Units",
    "test_reference" => "Normal Reference Range",
    "test_flags" => "Flag",
    "test_datetime" => "Date of Test",
    "test_from" => "Location",
    "test_code" => "LOINC Code",
    "test_provider_id" => "Provider",
    "vital_signs" => "Vital Signs",
    "results" => "Results",
    "add_result" => "Add Result",
    "results_reply" => "Result Reply To Patient",
    "tests_performed" => "Tests Performed",
    "tests_message" => "Message to Patient",
    "followup" => "Followup",
    "send_portal" => "Send Message to Portal",
    "send_letter" => "Send Letter",
    "results_reply_header" => "Reply to Patient about New Results",
    "unit" => "Unit",
    "range" => "Range",
    "chart" => "Chart",
    "reference" => "Reference",
    "flags" => "Flags",
    "performed_on" => "Performed on",
    "results_encounter" => "Test result marked as reviewed for encounter",

    // Users
    "username" => "Username",
    "practice_id" => "Practice ID",
    "secure_message_notification" => "Secure Message Notification",
    "biller" => "Biller",
    "user" => "User",
    "users" => "Users",
    "current_signature" => "Current Signature",
    "add_signature" => "Add your signature:",
    "update_signature" => "Update your signature:",
    "verify_name" => "Print your Name for Verification",
    "first_last" => "First Last",
    "draw_it" => "Draw It",
    "clear" => "Clear",
    "signature" => "Signature",

    // Vitals
    "pick_method" => "Pick method",
    "oral" => "Oral",
    "axillary" => "Axillary",
    "temporal" => "Temporal",
    "rectal" => "Rectal",
    "pick_position" => "Pick position",
    "sitting" => "Sitting",
    "standing" => "Standing",
    "supine" => "Supine",
    "weight" => "Weight",
    "height" => "Height",
    "headcircumference" => "Head Circumference",
    "headcircumference1" => "HC",
    "BMI" => "BMI",
    "temp" => "Temperature",
    "temp1" => "Temp",
    "temp_method" => "Temperature Method",
    "bp_systolic" => "Systolic BP",
    "bp_systolic1" => "SBP",
    "bp_diastolic" => "Diastolic BP",
    "bp_diastolic1" => "DBP",
    "bp_position" => "BP Position",
    "pulse" => "Pulse",
    "respirations" => "Respirations",
    "respirations1" => "Resp",
    "o2_sat" => "O2 Saturation",
    "vitals_other" => "Notes",
    "wt_percentile" => "Weight to Age Percentile",
    "ht_percentile" => "Height to Age Percentile",
    "wt_ht_percentile" => "Weight to Height Percentile",
    "hc_percentile" => "Head Circumference to Age Percentile",
    "bmi_percentile" => "BMI to Age Percentile",
    "vital_signs" => "Vital Signs",
    "chart_of" => "Chart of",
    "over_time_for" => "over time for",
    "as_of" => "as of",

    // Care Opportunites
    "care_opportunities" => "Care Opportunites",
    "prevention" => "Prevention",
    "hedis" => "HEDIS Audit",
    "ascvd" => "ASCVD Risk",
    "uspstf" => "US Preventative Services Task Force Recommendations",
    "uspstf_ab" => "Grades A & B",
    "uspstf_ab_desc" => "Offer or provide this service:",
    "uspstf_c" => "Grade C",
    "uspstf_c_desc" => "Offer or provide this service for selected patients depending on individual circumstances:",
    "uspstf_d" => "Grade D",
    "uspstf_d_desc" => "Discourage the use of this service:",
    "uspstf_i" => "Grade I",
    "uspstf_i_desc" => "Read the clinical considerations section of USPSTF Recommendation Statement. If the service is offered, patients should understand the uncertainty about the balance of benefits and harms:",
    "uspstf_none" => "US Preventative Services Task Force Recommendations Not Available At This Time",
    "startAspirin" => "Start or continue aspirin now",
    "startAspirin_StartBPlowering" => "Start/continue aspirin + start/add BP-lowering drug now",
    "startAspirin_StartBPlowering_StopSmoking" => "Start/continue aspirin + start/add BP-lowering drug + stop smoking for 2 years",
    "startAspirin_StartStatin" => "Start/continue aspirin + start/intensify statin now",
    "startAspirin_StartStatin_StopSmoking" => "Start/continue aspirin + start/intensify statin + stop smoking for 2 years",
    "startAspirin_StopSmoking" => "Start/continue aspirin + stop smoking for 2 years",
    "startBPlowering" => "Start (or add) BP-lowering drug now",
    "startBPlowering_StopSmoking" => "Start/add BP-lowering drug + stop smoking for 2 years",
    "startStatin" => "Start statin (moderate intensity) or intensify statin from moderate to high intensity dose now",
    "startStatin_StartAspirin_StartBPlowering" => "Start/continue aspirin + start/intensify statin + start/add BP-lowering drug now",
    "startStatin_StartBPlowering" => "Start/continue statin + start/add BP-lowering drug now",
    "startStatin_StartBPlowering_StopSmoking" => "Start/intensify statin + start/add BP-lowering drug + stop smoking for 2 years",
    "startStatin_StopSmoking" => "Start/intensify statin + stop smoking for 2 years",
    "stopSmoking" => "Stop smoking for 2 years",
    "startAll" => "Start or continue aspirin now + start/intensify statin + start/add BP-lowering drug + stop smoking for 2 years",
    "ascvd_calc" => "ASCVD Risk Calculation",
    "ascvd_baseline" => "Baseline 10 year ASCVD Risk",
    "hedis_fix" => "Fixes",
    "hedis_cwp" => "Appropriate Testing for Children With Pharyngitis",
    "hedis_cwp_perc" => "Percentage tested",
    "hedis_cwp_perc1" => "Percentage treated with antibiotics",
    "hedis_cwp_perc2" => "Percentage treated with antibiotics without testing",
    "hedis_uri" => "Appropriate Treatment for Children With Upper Respiratory Infection",
    "hedis_uri_perc" => "Percentage treated with antibiotics",
    "hedis_aab" => "Avoidance of Antibiotic Treatment for Adults with Acute Bronchitis",
    "hedis_aab_perc" => "Percentage treated with antibiotics",
    "hedis_pce" => "Pharmacotherapy Management of COPD Exacerbation",
    "hedis_pce_perc" => "Percentage treated for COPD exacerbations",
    "hedis_lbp" => "Use of Imaging Studies for Low Back Pain",
    "hedis_lbp_perc" => "Percentage of instances where no imaging study was performed for a diagnosis of low back pain",
    "hedis_bcs_n" => "Breast Cancer Screening not performed",
    "hedis_bcs_fix" => "Mammogram needs to be performed",
    "hedis_bcs_y" => "Breast Cancer Screening performed",
    "hedis_cbp_n" => "Controlling High Blood Pressure not performed",
    "hedis_cbp_fix1" => "Blood pressure needs to be under better control.",
    "hedis_cbp_fix2" => "Blood pressures need to be measured.",
    "hedis_cbp_y" => "Controlling High Blood Pressure performed",
    "hedis_ccs_n" => "Cervical Cancer Screening not performed",
    "hedis_ccs_fix" => "Pap test needs to be performed",
    "hedis_ccs_y" => "Cervical Cancer Screening performed",
    "hedis_cdc_n" => "Comprehensive Diabetes Care not performed",
    "hedis_cdc_fix1" => "HgbA1c needs to be measured",
    "hedis_cdc_fix2" => "LDL needs to be measured",
    "hedis_cdc_fix3" => "Urine microalbumin needs to be measured",
    "hedis_cdc_fix4" => "Diabetic eye exam needs to be performed",
    "hedis_cdc_fix5" => "Blood pressure needs to be under better control.",
    "hedis_cdc_fix6" => "Blood pressures need to be measured.",
    "hedis_cdc_y" => "Comprehensive Diabetes Care performed",
    "hedis_chl_n" => "Chlamydia Screening not performed",
    "hedis_chl_fix" => "Chlamydia test needs to be performed",
    "hedis_chl_y" => "Chlamydia Screening performed",
    "hedis_cis_n" => "Childhood Immunization Status not performed",
    "hedis_cis_fix1" => "Needs DTaP immunization",
    "hedis_cis_fix2" => "Needs IPV immunization",
    "hedis_cis_fix3" => "Needs MMR immunization",
    "hedis_cis_fix4" => "Needs Hib immunization",
    "hedis_cis_fix5" => "Needs Hepatitis B immunization",
    "hedis_cis_fix6" => "Needs Varicella immunization",
    "hedis_cis_fix7" => "Needs Pneumoccocal immunization",
    "hedis_cis_fix8" => "Needs Hepatitis A immunization",
    "hedis_cis_fix9" => "Needs Rotavirus immunization",
    "hedis_cis_fix10" => "Needs influenza immunization",
    "hedis_cis_y" => "Childhood Immunization Status performed",
    "hedis_cmc_n" => "Cholesterol Management for Patients With Cardiovascular Conditions not performed",
    "hedis_cmc_fix" => "LDL needs to be measured",
    "hedis_cmc_y" => "Cholesterol Management for Patients With Cardiovascular Conditions performed",
    "hedis_col_n" => "Colorectal Cancer Screening not performed",
    "hedis_col_fix" => "Colon cancer screening needs to be performed",
    "hedis_col_y" => "Colorectal Cancer Screening performed",
    "hedis_gso_n" => "Glaucoma Screening Older Adults not performed",
    "hedis_gso_fix" => "Glaucoma screening needs to be performed",
    "hedis_gso_y" => "Glaucoma Screening Older Adults performed",
    "hedis_ima_n" => "Immunizations for Adolescents not performed",
    "hedis_ima_fix1" => "Needs meningococcal immunization",
    "hedis_ima_fix2" => "Needs Tdap immunization",
    "hedis_ima_y" => "Immunizations for Adolescents performed",
    "hedis_hpv_n" => "Human Papillomavirus Vaccine for Female Adolescents not performed",
    "hedis_hpv_fix" => "Needs HPV immunization",
    "hedis_hpv_y" => "Human Papillomavirus Vaccine for Female Adolescents performed",
    "hedis_lsc_n" => "Lead Screening in Children not performed",
    "hedis_lsc_fix" => "Lead level needs to be measured",
    "hedis_lsc_y" => "Lead Screening in Children performed",
    "hedis_omw_n" => "Disease Modifying Anti-Rheumatic Drug Therapy for Rheumatoid Arthritis not performed",
    "hedis_omw_fix" => "Bone density screening needs to be performed or osteoporosis prevention medication is recommended",
    "hedis_omw_y" => "Disease Modifying Anti-Rheumatic Drug Therapy for Rheumatoid Arthritis performed",
    "hedis_pbh_n" => "Persistence of Beta-Blocker Treatment After a Heart Attack not performed",
    "hedis_pbh_fix" => "Beta blocker is recommended",
    "hedis_pbh_y" => "Persistence of Beta-Blocker Treatment After a Heart Attack performed",
    "hedis_spr_n" => "Use of Spirometry Testing in the Assessment and Diagnosis of COPD not performed",
    "hedis_spr_fix" => "Glaucoma screening needs to be performed",
    "hedis_spr_y" => "Use of Spirometry Testing in the Assessment and Diagnosis of COPD performed",
    "hedis_wcc_n" => "Weight Assessment and Counseling for Nutrition and Physical Activity for Children and Adolescents not performed",
    "hedis_wcc_fix1" => "BMI, height, and weight needs to be measured",
    "hedis_wcc_fix2" => "Nutritional counseling needs to be performed",
    "hedis_wcc_fix3" => "Physical activity counseling needs to be performed",
    "hedis_wcc_y" => "Weight Assessment and Counseling for Nutrition and Physical Activity for Children and Adolescents performed",
    "ascvd_missing_0" => "Patient race not specified",
    "ascvd_missing_1" => "Patient tobacco status not specified",
    "ascvd_missing_2" => "No historical blood pressure readings",
    "ascvd_missing_3" => "No historical HDL cholesterol values",
    "ascvd_missing_4" => "No historical LDL cholesterol values",
    "ascvd_missing_5" => "No historical total cholesterol values",
    "ascvd_missing" => "Unable to calculate ASCVD risk score due to missing items",

    // FHIR
    "cms_bluebutton_display" => "CMS Bluebutton Data",
    "patient_summary" => "Patient Summary",
    "explanation_of_benefit" => "Explanation of Benefits",
    "coverage" => "Coverage Information",
    "payment_amount" => "Payment Amount",
    "cms_bluebutton_eob" => "CMS Bluebutton EOB Details",
    "cms_bluebutton_eob_date" => "Date",
    "cms_bluebutton_eob_quantity" => "Quantity",
    "cms_bluebutton_eob_diagnosis" => "Diagnosis Code",
    "cms_bluebutton_eob_adjudications" => "Adjudications",
    "details" => "Details",
];