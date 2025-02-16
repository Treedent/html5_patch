[![TYPO3 12](https://img.shields.io/badge/TYPO3-12-orange.svg?logo=typo3)](https://get.typo3.org/version/12)

# TYPO3 Extension `html5_patch`

EN :This extension patches TYPO3 to eliminate non-HTML5-standard self-closing tags. In this way, the W3C validator will skip the validation steps on `link, meta and input` tags generated in a non-compliant HTML5 way by TYPO3.

FR : Cette extension patche TYPO3 de sorte à éliminer les balises auto-fermantes non normalisées par le HTML5. Ainsi le validator W3C passera les étapes de validation sur les balises `link, meta, input` générées de manière non conformes au HTML5 par TYPO3.

![W3C validator](Resources/Public/Images/W3C_validation.png)


To install this extension you need to run the following command :

```shell
composer require syradev/html5_patch

```

* Then, in your main composer.json you will need to manually add the code below:

```composer.json
"extra": {
    "patches": {
        "typo3/cms-frontend": [
            "packages/html5_patch/patches/typo3-cms-frontend-classes-http-requesthandler-php.patch"
        ],
        "typo3/cms-seo": [
            "packages/html5_patch/patches/typo3-cms-seo-classes-canonical-canonicalgenerator-php.patch"
        ],
        "typo3/cms-fluid": [
            "packages/html5_patch/patches/typo3-cms-fluid-classes-viewhelpers-formviewhelper-php.patch"
        ],
        "typo3/cms-core": [
            "packages/html5_patch/patches/typo3-cms-core-classes-page-pagerenderer-php.patch"
        ],
        "typo3fluid/fluid": [
            "packages/html5_patch/patches/typo3fluid-fluid-src-core-viewhelper-tagbuilder-php.patch"
        ],
    }
}
```

* Then issue a `composer install` command to apply the patch.

<img src="Resources/Public/Images/syradev_2025.svg" alt="Syradev" width="100">

## Syradev © 2025

