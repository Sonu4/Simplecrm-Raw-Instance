<?php
// created: 2017-07-18 21:18:51
$viewdefs = array (
  'Leads' => 
  array (
    'DetailView' => 
    array (
      'templateMeta' => 
      array (
        'form' => 
        array (
          'buttons' => 
          array (
            0 => 'EDIT',
            1 => 'DUPLICATE',
            2 => 'DELETE',
            3 => 
            array (
              'customCode' => '{if $bean->aclAccess("edit") && !$DISABLE_CONVERT_ACTION}<input title="{$MOD.LBL_CONVERTLEAD_TITLE}" accessKey="{$MOD.LBL_CONVERTLEAD_BUTTON_KEY}" type="button" class="button" onClick="document.location=\'index.php?module=Leads&action=ConvertLead&record={$fields.id.value}\'" name="convert" value="{$MOD.LBL_CONVERTLEAD}">{/if}',
              'sugar_html' => 
              array (
                'type' => 'button',
                'value' => '{$MOD.LBL_CONVERTLEAD}',
                'htmlOptions' => 
                array (
                  'title' => '{$MOD.LBL_CONVERTLEAD_TITLE}',
                  'accessKey' => '{$MOD.LBL_CONVERTLEAD_BUTTON_KEY}',
                  'class' => 'button',
                  'onClick' => 'document.location=\'index.php?module=Leads&action=ConvertLead&record={$fields.id.value}\'',
                  'name' => 'convert',
                  'id' => 'convert_lead_button',
                ),
                'template' => '{if $bean->aclAccess("edit") && !$DISABLE_CONVERT_ACTION}[CONTENT]{/if}',
              ),
            ),
            4 => 'FIND_DUPLICATES',
            5 => 
            array (
              'customCode' => '<input title="{$APP.LBL_MANAGE_SUBSCRIPTIONS}" class="button" onclick="this.form.return_module.value=\'Leads\'; this.form.return_action.value=\'DetailView\';this.form.return_id.value=\'{$fields.id.value}\'; this.form.action.value=\'Subscriptions\'; this.form.module.value=\'Campaigns\'; this.form.module_tab.value=\'Leads\';" type="submit" name="Manage Subscriptions" value="{$APP.LBL_MANAGE_SUBSCRIPTIONS}">',
              'sugar_html' => 
              array (
                'type' => 'submit',
                'value' => '{$APP.LBL_MANAGE_SUBSCRIPTIONS}',
                'htmlOptions' => 
                array (
                  'title' => '{$APP.LBL_MANAGE_SUBSCRIPTIONS}',
                  'class' => 'button',
                  'id' => 'manage_subscriptions_button',
                  'onclick' => 'this.form.return_module.value=\'Leads\'; this.form.return_action.value=\'DetailView\';this.form.return_id.value=\'{$fields.id.value}\'; this.form.action.value=\'Subscriptions\'; this.form.module.value=\'Campaigns\'; this.form.module_tab.value=\'Leads\';',
                  'name' => '{$APP.LBL_MANAGE_SUBSCRIPTIONS}',
                ),
              ),
            ),
            6 => 
            array (
              'customCode' => '<input title="{$APP.LBL_VCARD}" class="button" onclick="this.form.return_module.value=\'Leads\'; this.form.return_action.value=\'DetailView\';this.form.return_id.value=\'{$fields.id.value}\'; this.form.action.value=\'vCard\'; this.form.module_tab.value=\'Leads\';" type="submit" name="Download vCard" value="{$APP.LBL_VCARD}">',
              'sugar_html' => 
              array (
                'type' => 'button',
                'value' => 'Download vCard',
                'htmlOptions' => 
                array (
                  'title' => '{$APP.LBL_VCARD}',
                  'class' => 'button',
                  'id' => 'btn_vCardButton',
                  'onclick' => 'this.form.return_module.value=\'Leads\'; this.form.return_action.value=\'DetailView\';this.form.return_id.value=\'{$fields.id.value}\'; this.form.action.value=\'vCard\'; this.form.module_tab.value=\'Leads\';',
                  'name' => '{$APP.LBL_VCARD}',
                ),
              ),
            ),
            'AOS_GENLET' => 
            array (
              'customCode' => '<input type="button" class="button" onClick="showPopup();" value="{$APP.LBL_GENERATE_LETTER}">',
            ),
            7 => 
            array (
              'customCode' => '<input  type="submit" class="button" name="create" id="create" value="Create Lead" onClick="document.location=\'index.php?module=Leads&action=EditView&return_module=Leads&return_action=DetailView\'">',
            ),
          ),
          'headerTpl' => 'modules/Leads/tpls/DetailViewHeader.tpl',
        ),
        'maxColumns' => '2',
        'widths' => 
        array (
          0 => 
          array (
            'label' => '10',
            'field' => '30',
          ),
          1 => 
          array (
            'label' => '10',
            'field' => '30',
          ),
        ),
        'includes' => 
        array (
          0 => 
          array (
            'file' => 'modules/Leads/Lead.js',
          ),
        ),
        'useTabs' => true,
        'tabDefs' => 
        array (
          'LBL_CONTACT_INFORMATION' => 
          array (
            'newTab' => true,
            'panelDefault' => 'expanded',
          ),
          'LBL_PANEL_ADVANCED' => 
          array (
            'newTab' => true,
            'panelDefault' => 'expanded',
          ),
          'LBL_DETAILVIEW_PANEL1' => 
          array (
            'newTab' => true,
            'panelDefault' => 'expanded',
          ),
        ),
      ),
      'panels' => 
      array (
        'LBL_CONTACT_INFORMATION' => 
        array (
          0 => 
          array (
            0 => 
            array (
              'name' => 'full_name',
              'label' => 'LBL_NAME',
            ),
            1 => 'phone_work',
          ),
          1 => 
          array (
            0 => 'title',
            1 => 'phone_mobile',
          ),
          2 => 
          array (
            0 => 'department',
            1 => 
            array (
              'name' => 'loan_type_c',
              'studio' => 'visible',
              'label' => 'LBL_LOAN_TYPE',
            ),
          ),
          3 => 
          array (
            0 => 
            array (
              'name' => 'account_name',
            ),
            1 => 'website',
          ),
          4 => 
          array (
            0 => 
            array (
              'name' => 'simplecrm_status_c',
              'studio' => 'visible',
              'label' => 'LBL_SIMPLECRM_STATUS',
            ),
            1 => 
            array (
              'name' => 'partner_status_c',
              'studio' => 'visible',
              'label' => 'LBL_PARTNER_STATUS',
            ),
          ),
          5 => 
          array (
            0 => 
            array (
              'name' => 'primary_address_street',
              'label' => 'LBL_PRIMARY_ADDRESS',
              'type' => 'address',
              'displayParams' => 
              array (
                'key' => 'primary',
              ),
            ),
            1 => 
            array (
              'name' => 'alt_address_street',
              'label' => 'LBL_ALTERNATE_ADDRESS',
              'type' => 'address',
              'displayParams' => 
              array (
                'key' => 'alt',
              ),
            ),
          ),
          6 => 
          array (
            0 => 'email1',
            1 => 'status',
          ),
          7 => 
          array (
            0 => 'description',
          ),
          8 => 
          array (
            0 => 
            array (
              'name' => 'assigned_user_name',
              'label' => 'LBL_ASSIGNED_TO',
            ),
          ),
          9 => 
          array (
            0 => 'phone_fax',
          ),
        ),
        'LBL_PANEL_ADVANCED' => 
        array (
          0 => 
          array (
            0 => 'lead_source',
            1 => 
            array (
              'name' => 'campaign_name',
              'label' => 'LBL_CAMPAIGN',
            ),
          ),
          1 => 
          array (
            0 => 'status_description',
            1 => 'lead_source_description',
          ),
          2 => 
          array (
            0 => 'opportunity_amount',
            1 => 'refered_by',
          ),
          3 => 
          array (
            0 => 
            array (
              'name' => 'tweet_id_c',
              'label' => 'LBL_TWEET_ID',
            ),
          ),
        ),
        'lbl_detailview_panel1' => 
        array (
          0 => 
          array (
            0 => 
            array (
              'name' => 'date_entered',
              'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
            ),
            1 => 
            array (
              'name' => 'date_modified',
              'label' => 'LBL_DATE_MODIFIED',
              'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
            ),
          ),
        ),
      ),
    ),
  ),
);