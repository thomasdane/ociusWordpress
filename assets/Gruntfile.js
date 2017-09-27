module.exports = function (grunt) {
    grunt.initConfig({

        // watch changes to less files
        watch: {
            styles: {
                files: ["less/**/*"],
                tasks: ["less"]
            },
            options: {
                spawn: false,
            },
        },

        // compile set less files
        less: {
            development: {
                options: {
                    paths: ["less"],
                    compress: true
                },
                files: {
                    "css/site.css": ["less/*.less", "!less/_*.less", "!less/editor.less", "less/desktop.less"],
                    "css/editor.css": "less/editor.less"
                }
            }
        },

    });

    // Load tasks so we can use them
    grunt.loadNpmTasks("grunt-contrib-watch");
    grunt.loadNpmTasks("grunt-contrib-less");

    // the default task will show the usage
    grunt.registerTask("default", "Prints usage", function () {
        grunt.log.writeln("");
        grunt.log.writeln("Using Base");
        grunt.log.writeln("------------------------");
        grunt.log.writeln("");
        grunt.log.writeln("* run 'grunt --help' to get an overview of all commands.");
        grunt.log.writeln("* run 'grunt dev' to start watching and compiling LESS changes.");
    });

    grunt.registerTask("dev", ["less:development", "watch:styles"]);
};
