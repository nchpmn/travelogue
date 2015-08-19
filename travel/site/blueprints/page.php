<?php if(!defined('KIRBY')) exit ?>

title: Page
pages: false
files: true
fields:
  pageSettings:
    label: Page Settings
    type: headline
  title:
    label: Title
    type: text
  country:
    label: Country
    type: text
  shortcode:
    label: Shortcode
    type: text
    width: 1/2
  date:
    label: Date
    type: date
    format: YYYY-MM-DD
    width: 1/2
  introduction:
    label: Introduction
    type: headline
  introHeader:
    label: Introduction
    type: text
  introText:
    label: Excerpt
    type: textarea
  content:
    label: Content
    type: headline
  text:
    label: Article Text
    type: textarea
  styling:
    label: Style Settings
    type: headline
  headerImage:
    label: Header Image
    type: select
    options: images
  headerContrast:
    label: Header Contrast
    type: select
    options:
      l: Light
      m: Medium
      d: Dark
  headerFont:
    label: Header Typeface
    type: text