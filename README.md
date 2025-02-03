# Bacon QR Adapter for Rose

This extension adds QR generation support to [Rose](https://github.com/rsthn/rose-core) using the famous [BaconQrCode](https://github.com/Bacon/BaconQrCode) library.

# Installation

```sh
composer require rsthn/rose-qr
```

## Expression Functions

### `qr:create` \<contents:str>

Generates a new QR code an returns an SVG image data string.

```lisp
(qr:create "Hello World")
```

### `qr:uri` \<contents:str>

Generates a new QR code an returns an SVG data-URI string.

```lisp
(qr:uri "Hello World")
```
