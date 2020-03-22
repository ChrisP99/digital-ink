$(document).ready(function () {
    $('#story_upload').validate({ // initialize the plugin
        rules: {
            title: {required: true},
            genre: {required: true},
            content: {required: true},
            blurb: {required: true},
            published: {required: true},
        },

        messages: {
            title: { required: "Please enter a title"},
            genre: { required: "Please choose a genre"},
            content: { required: "Please add your story"},
            blurb: { required: "Please add a blurb"},
            published: { required: "Please enter if this story is a draft or an upload"},
        },
    });
});
