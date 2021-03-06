<?php
/*
Title: Multiselect Fields
Order: 40
Tab: Common
Sub Tab: Lists
Setting: piklist_demo_fields
Flow: Demo Workflow
*/

  piklist('field', array(
    'type' => 'select'
    ,'field' => 'multiselect'
    ,'label' => __('Multiselect', 'piklist-demo')
    ,'value' => 'third'
    ,'choices' => array(
      'first' => __('First Choice', 'piklist-demo')
      ,'second' => __('Second Choice', 'piklist-demo')
      ,'third' => __('Third Choice', 'piklist-demo')
    )
    ,'attributes' => array(
      'multiple' => 'multiple' // This changes a select field into a multi-select field
    )
  ));
  
  piklist('field', array(
    'type' => 'select'
    ,'field' => 'multiselect_add_more'
    ,'label' => __('Multiselect Add More', 'piklist-demo')
    ,'value' => 'third'
    ,'add_more' => true
    ,'choices' => array(
      'first' => __('First Choice', 'piklist-demo')
      ,'second' => __('Second Choice', 'piklist-demo')
      ,'third' => __('Third Choice', 'piklist-demo')
    )
    ,'attributes' => array(
      'multiple' => 'multiple' // This changes a select field into a multi-select field
    )
  ));
  
  piklist('shared/code-locater', array(
    'location' => __FILE__
    ,'type' => 'Settings Section'
  ));