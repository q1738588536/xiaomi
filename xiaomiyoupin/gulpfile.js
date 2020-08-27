var gulp = require("gulp");
var uglify = require("gulp-uglify");
gulp.task("js",function(){
    console.log("这是压缩");
    gulp.src("js/*.js").pipe(uglify()).pipe(gulp.dest("js"));
});


var babel = require("gulp-babel");
 
gulp.task("es",function(){
    gulp.src(["js/*.js"]).pipe(babel({presets: ['es2015']})).pipe(gulp.dest("js"));
});