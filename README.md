# Bacon QR Adapter for Rose

This extension adds QR generation support to [Rose](https://github.com/rsthn/rose-core) using the famous [BaconQrCode](https://github.com/Bacon/BaconQrCode) library.

<br/>

# Installation

```sh
composer require rsthn/rose-qr
```

<br/>

## Expression Functions

### `qr::create` contents:string

Generates a new QR code an returns an SVG image data string.

```lisp
(qr::create "Hello World")
```
