   /*
        Template Name: Admin Pro Admin
        Author: Wrappixel
        Email: niravjoshi87@gmail.com
        File: js
        */
        $(function () {
            "use strict";

            // Fetch user count data via AJAX
            $.ajax({
                url: '/user-count',
                method: 'GET',
                success: function(response) {
                    var userCount = response.userCount;
                    var adminCount = response.adminCount;
                    console.log('User Count: ', userCount); // To verify
                    console.log('Admin Count: ', adminCount); // To verify

                    // Update chart data with user count
                    var chart2 = new Chartist.Bar(
                        ".amp-pxl",
                        {
                            labels: ["User", "Admin", "Studio",],
                            series: [
                                [userCount, adminCount, 3,], // Updated series with user count
                                [1, 1, 1,],
                            ],
                        },
                        {
                            axisX: {
                                // On the x-axis start means top and end means bottom
                                position: "end",
                                showGrid: false,
                            },
                            axisY: {
                                // On the y-axis start means left and end means right
                                position: "start",
                            },
                            high: "12",
                            low: "0",
                            plugins: [Chartist.plugins.tooltip()],
                        }
                    );

                    var chart = [chart2];
                }
            });
        });
