// const path = require('path');
export const addJS = (files, append_in = 'body') => {
    files.forEach(src => {
        const plugin = document.createElement("script");
        plugin.setAttribute(
            "src",
            src
        );
        plugin.async = true;
        document[append_in].appendChild(plugin);
    });
}
export const addCSS = (files, append_in = 'head') => {
    files.forEach(href => {
        const plugin = document.createElement("link");
        plugin.setAttribute(
            "href",
            href
        );
        plugin.async = true;
        document[append_in].appendChild(plugin);
    });
}
