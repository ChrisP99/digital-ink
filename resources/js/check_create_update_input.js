$(document).ready(function () {
    $('#story_upload').validate({ // initialize the plugin
        rules: {
            title: {required: true},
            genre: {required: true},
            content: {required: '#file_upload:blank'},
            file_upload: {
                required: '#content:blank',
                accept: 'pdf',
            },
            cover_image: {
                accept: 'image/*',
            },
            blurb: {required: true},
            published: {required: true},
        },

        messages: {
            title: { required: "Please enter a title"},
            genre: { required: "Please choose a genre"},
            content: { required: "Please add your story"},
            file_upload: {
                required: "Please upload your story",
                accept: "Please upload your story in a pdf format",
            },
            cover_image: {
                accept: 'Please upload an cover in a image format',
            },
            blurb: { required: "Please add a blurb"},
            published: { required: "Please enter if this story is a draft or an upload"},
        },
    });
});
