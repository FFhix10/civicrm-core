<?php
return [
  'entity' => 'Contact',
  'contact_type' => 'Organization',
  'defaults' => "{
    data: {
      contact_type: 'Organization',
      source: afform.title
    },
    'url-autofill': '1'
  }",
  'icon' => 'fa-building',
  'boilerplate' => [
    ['#tag' => 'afblock-name-organization'],
  ],
  'admin_tpl' => '~/afGuiEditor/entityConfig/Contact.html',
];
