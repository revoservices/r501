# User Interface

r501 is designed to free you from writing repetetive HTML. These classes and functions can be called from anywhere within the page.

They can also be extended by simply creating new classes in `/cfg/lib`.

---

### System classes:
* [Forms](../FORMS)
* [Alerts](../ALERTS)
* [Panels](#)
* [Links](#)
* [Buttons](#)

---

### To create a new class:
1. Use any editor to create a new file in `/cfg/lib`.
    - Note: For consistency, it is recommended that you stick with the file naming convention.
2. Write the code for your class.
3. Save the file as `/cfg/lib/class_*description*.php`.
4. Edit `/cfg/classes.php`.
5. Add the following code:
```php
require_once('cfg/lib/class_*description*.php');
```
6. Save `/cfg/classes.php`.
#### That's it!
Feel free to submit your contribution on GitHub, your name will be added to the contributors list.


