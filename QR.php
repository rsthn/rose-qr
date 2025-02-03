<?php

namespace Rose\Ext\Wind;

use BaconQrCode\Renderer\ImageRenderer;
use BaconQrCode\Renderer\Image\SvgImageBackEnd;
use BaconQrCode\Renderer\RendererStyle\RendererStyle;
use BaconQrCode\Writer;

use Rose\Errors\Error;
use Rose\Expr;

/**
 * Generates a new QR code an returns an SVG image data string.
 * (qr:create <contents>)
 */
Expr::register('qr:create', function ($args)
{
    $renderer = new ImageRenderer(
        new RendererStyle(400),
        new SvgImageBackEnd()
    );

    $writer = new Writer($renderer);
    return $writer->writeString($args->get(1));
});


/**
 * Generates a new QR code an returns an SVG data-URI string.
 * (qr:uri <contents>)
 */
Expr::register('qr:uri', function ($args)
{
    $renderer = new ImageRenderer(
        new RendererStyle(400),
        new SvgImageBackEnd()
    );

    $writer = new Writer($renderer);
    return "data:image/svg+xml;base64,".base64_encode($writer->writeString($args->get(1)));
});
