r501
======
Bootstrap-based website framework.

Forms
------
##### Set up the form:

Begin a form by calling the function `beginForm()`.

This function has three parameters: 

+ `$action`, which defines where the form goes.

+ `$method`, method to send data.

+ `$legend`, a title for the form. (optional)

##### Define inputs:

For each input group, define a new `formGroup`.

```php
$demo = new Formgroup();
		$demo->label = "so much class";
		$demo->labelsize = "3";
		$demo->type = "text";
		$demo->id = "wow";
		$demo->name = "lost";
		$demo->value = "so code";
		$demo->inputsize = "9";
		$demo->required = "1";
		$demo->placeholder = "much type";
		$demo->checked = "1";
```

And render it:
```php
$demo->renderGroup
```

##### Close the form:

Simply call the function `endForm()` to end the form.
