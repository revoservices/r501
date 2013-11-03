
# Alerts


Alerts are very simple to use. Only two parameters need to be passed.
* `$type`: primary, success, danger, warning
* `$content`: Whatever you wish to show up in the alert.
..- This can be passed directly or called from another variable.


###### Example:
```php
$myAlert = new alert($type,$content);
$myAlert->showalert();
```
