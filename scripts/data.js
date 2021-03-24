const axios = require('axios');
const { count } = require('console');
const fs = require('fs');

var pageList = [];
var titles = [];

axios({
    method: 'get',
    url: 'https://www.reddit.com/reddits.json',
    responseType: 'json'
}).then(function(response) {
    var pages = response.data.data.children;
    pages.forEach(page => {
        var data = page.data;
        // console.log(data.display_name);
        pageList.push(data.display_name);
    });


    pageList.forEach((p, i) => {
        var done = (i == pageList.length - 1);
        axios({
            method: 'get',
            url: `https://www.reddit.com/r/${p}.json`,
            responseType: 'json'
        }).then(function(response) {
            var posts = response.data.data.children;
            posts.forEach(post => {
                var data = post.data;
                // console.log(data.title);
                // console.log('================================================');
                titles.push({
                    input: data.title,
                    output: ''
                });
            });
            if (done) {
                var output = JSON.stringify(titles);
                // console.log(output);
                fs.writeFile('./scripts/data.json', output, (err) => {
                    if (err) {
                        throw err;
                    }
                    console.log("Saved.");
                });
            }
        }).catch(err => {
            console.log(err);
        });

        sleep(500);
    });

    // sleep(12000);

    var output = JSON.stringify(titles);

    // console.log(output);

    // fs.writeFile('./scripts/data.json', output, (err) => {
    //     if (err) {
    //         throw err;
    //     }
    //     console.log("Saved.");
    // });
});

function sleep(milliseconds) {
    const date = Date.now();
    let currentDate = null;
    do {
        currentDate = Date.now();
    } while (currentDate - date < milliseconds);
}