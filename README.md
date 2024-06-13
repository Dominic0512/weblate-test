# Weblate PHP demo project

## Getting started

Start the applicateion via docker-compose 

```bash
docker-compose up -d
```

## Demo workflow

### Step1: Go to Github repository setting to add webhook for the weblate endpoint

### Step2: Edit the `src/index.php` file with to add/update the gettext function

```php
_('let\'s add the next copies!')
```

### Step3: Commit and push code.
### Step4: The `make-main-pot` Github pipeline will be triggered.
### Step5: Once the previous Github action is done, pull the latest code to get the intermediate file.
### Step6: Update `msgstr` of the intermediate lanaguage file

```
msgid "aloha"
msgstr "啊囉哈" <--- here
```

### Step7: Commit and push code.
### Step8: Github will trigger the webhook to Weblate dashboard.
### Step9: Go to Weblate page the check the `Major` language translate page.
### Step10: Manual commit and push the translated file (or waiting the Weblate automatic job every 24 hour.)
### Step11: The `make-locale-mo` Github pipeline will be triggered.
### Step12: Once the previous Github action is done, pull the latest code to get the locale `*.po` and `*.mo` files
### Step13: Restart the `php-fpm` docker container to prevent the cache issue
```bash
docker-compose restart php-fpm
```
### Step14: Go to the landing page to check specific language works or not
```
http://localhost:8888/?lang=en
http://localhost:8888/?lang=kr
http://localhost:8888/?lang=tw
```

test 1