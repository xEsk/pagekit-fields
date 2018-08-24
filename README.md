# Assets

## General
Allows you to include dynamic fields like current year to your contents.

## Installation
Please install this extension via Pagekit's marketplace.

## Basic usage
To include a dynamic field use the Pagekit plugin content anotation:

``(fields){"id":"action"}``

## Available fields

### Date time fields

``(fields){"id":"year"}`` Outputs the current year, example: **2018**

``(fields){"id":"date", "format":"..."}`` Outputs the current date using a custom PHP format.

### Server information

``(fields){"id":"server", "value":"..."}`` 

Outputs any field value stored in **$_SERVER** array, for example: **SERVER_NAME**.