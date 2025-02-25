import './bootstrap';

import Alpine from 'alpinejs';
import Clipboard from '@ryangjchandler/alpine-clipboard'; // https://github.com/ryangjchandler/alpine-clipboard

// Note: you need to be in https to use clipboard plugin
Alpine.plugin(Clipboard) // enable clipboard plugin

window.Alpine = Alpine;

Alpine.start();
