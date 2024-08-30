 <!--row -->
<!--row -->

                 <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="white-box bg-danger">
                            <div class="r-icon-stats">
                                <i class="fa fa-wheelchair bg-danger"></i>
                                <div class="bodystate">
                                    <h4 style="color:white"><?php echo $this->db->get('patient')->num_rows();?></h4>
                                    <span class="text-muted"><a href="" style="color:white"><?php echo get_phrase('New Patient');?></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                    <div class="white-box bg-success">
                            <div class="r-icon-stats">
                                <i class="fa fa-user-md bg-success"></i>
                                <div class="bodystate">
                                <h4 style="color:white"><?php echo $this->db->get('doctor')->num_rows();?></h4>
                                    <span class="text-muted"><a href="" style="color:white"><?php echo get_phrase('New Doctor');?></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="white-box bg-info">
                            <div class="r-icon-stats">
                                <i class="fa fa-users bg-info"></i>
                                <div class="bodystate">
                                    <h4 style="color:white"><?php echo $this->db->get('nurse')->num_rows();?></h4>
                                    <span class="text-muted"><a href="" style="color:white"><?php echo get_phrase('New Nurse');?></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="white-box bg-purple">
                            <div class="r-icon-stats">
                                <i class="fa fa-users bg-purple"></i>
                                <div class="bodystate">
                                <h4 style="color:white"><?php echo $this->db->get('donor')->num_rows();?></h4>
                                    <span class="text-muted"><a href="" style="color:white"><?php echo get_phrase('New Donor');?></a></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="white-box">
                            <div class="r-icon-stats">
                                <i class="fa fa-credit-card bg-success"></i>
                                <div class="bodystate">
                                <h4 ><?php echo $this->db->get('invoice')->num_rows();?></h4>
                                    <span class="text-muted"><?php echo get_phrase('New Invoice');?></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="white-box">
                            <div class="r-icon-stats">
                                <i class="fa fa-clock-o bg-danger"></i>
                                <div class="bodystate">
                                <h4 ><?php echo $this->db->get('schedule')->num_rows();?></h4>
                                    <span class="text-muted"><?php echo get_phrase('New Schedule');?></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="white-box">
                            <div class="r-icon-stats">
                                <i class="fa fa-calendar bg-purple"></i>
                                <div class="bodystate">
                                <h4 ><?php echo $this->db->get('appointment')->num_rows();?></h4>
                                    <span class="text-muted"><?php echo get_phrase('Appointment');?></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="white-box">
                            <div class="r-icon-stats">
                                <i class="fa fa-tint bg-info"></i>
                                <div class="bodystate">
                                <h4 ><?php echo $this->db->get('blood')->num_rows();?></h4>
                                    <span class="text-muted"><?php echo get_phrase('Blood Bank');?></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                 </div>
                <!--/row -->
                <!-- .row -->


                <div class="row">
                    <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title"><?php echo get_phrase('Total Expense');?></h3>

                            <!-- Resources -->
                            <script src="https://www.amcharts.com/lib/4/core.js"></script>
                            <script src="https://www.amcharts.com/lib/4/charts.js"></script>
                            <script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>
                            <script>
                                am4core.ready(function() {

                                // Themes begin
                                am4core.useTheme(am4themes_animated);
                                // Themes end

                                // Create chart instance
                                var chart = am4core.create("chartdiv", am4charts.PieChart);

                                // Add data
                                chart.data = [

                                <?php $select_expense = $this->db->get_where('payment', array('payment_type' => 'expense'))->result_array();
                                       foreach($select_expense as $key => $expense) : ?>
                                    {
                                    "country": "<?php echo $expense['title'];?>",
                                    "litres": <?php echo $expense['amount'];?>
                                    },
                                <?php endforeach;?>
                                  ];

                                // Add and configure Series
                                var pieSeries = chart.series.push(new am4charts.PieSeries());
                                pieSeries.dataFields.value = "litres";
                                pieSeries.dataFields.category = "country";
                                pieSeries.innerRadius = am4core.percent(50);
                                pieSeries.ticks.template.disabled = true;
                                pieSeries.labels.template.disabled = true;

                                var rgm = new am4core.RadialGradientModifier();
                                rgm.brightnesses.push(-0.8, -0.8, -0.5, 0, - 0.5);
                                pieSeries.slices.template.fillModifier = rgm;
                                pieSeries.slices.template.strokeModifier = rgm;
                                pieSeries.slices.template.strokeOpacity = 0.4;
                                pieSeries.slices.template.strokeWidth = 0;

                                chart.legend = new am4charts.Legend();
                                chart.legend.position = "right";

                                }); // end am4core.ready()
                                </script>
                                <div id="chartdiv" style="height: 300px;"></div>
                        </div>
                    </div>

                    <div class="col-md-7 col-lg-7 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title"><?php echo get_phrase('Total Income');?></h3>


                             <!-- The ALTERNATIVE LINE CHART STARTS HERE  -->

                             <script>
                                am4core.ready(function() {

                                // Themes begin
                                am4core.useTheme(am4themes_animated);
                                // Themes end

                                // Create chart instance
                                var chart = am4core.create("chartdiv3", am4charts.XYChart);

                                // Add data
                                chart.data = [
                                    <?php
                                        $select_income = $this->db->get_where('payment', array('payment_type' => 'income'))->result_array();
                                        foreach($select_income as $key => $income) :
                                        $invoice = $this->db->get_where('invoice', array('invoice_id' => $income['invoice_id']))->row()->patient_id;
                                        ?>
                                {
                                "date": new Date(<?php echo date('Y', $income['timestamp']);?>,<?php echo date('m', $income['timestamp'])-1;?>,<?php echo date('d', $income['timestamp']);?>),
                                "value": <?php echo $income['amount'];?>
                                },
                                <?php endforeach;?>

                                ];

                                // Create axes
                                var dateAxis = chart.xAxes.push(new am4charts.DateAxis());

                                // Create value axis
                                var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());

                                // Create series
                                var lineSeries = chart.series.push(new am4charts.LineSeries());
                                lineSeries.dataFields.valueY = "value";
                                lineSeries.dataFields.dateX = "date";
                                lineSeries.name = "Sales";
                                lineSeries.strokeWidth = 3;

                                // Add simple bullet
                                var bullet = lineSeries.bullets.push(new am4charts.Bullet());
                                var image = bullet.createChild(am4core.Image);
                                image.href = "https://www.amcharts.com/lib/images/star.svg";
                                image.width = 30;
                                image.height = 30;
                                image.horizontalCenter = "middle";
                                image.verticalCenter = "middle";

                                }); // end am4core.ready()
                                </script>

                                
                                <div id="chartdiv3" style="height: 300px;"></div>

                                  <!--The FIRST ALTERNATIVE LINE CHART ENDS HERE  -->



                                <!-- The SECOND ALTERNATIVE COLUMN CHART STARTS HERE  -->
                                <!-- Chart code -->
      
                                <script>
                                    
                                am4core.ready(function() {

                                // Themes begin
                                am4core.useTheme(am4themes_animated);
                                // Themes end

                                /**
                                 * Chart design taken from Samsung health app
                                 */

                                var chart = am4core.create("chartdiv2", am4charts.XYChart);
                                chart.hiddenState.properties.opacity = 0; // this creates initial fade-in

                                chart.paddingBottom = 30;

                                chart.data = [
                                    
                                    <?php
                                    $select_income = $this->db->get_where('payment', array('payment_type' => 'income'))->result_array();
                                    foreach($select_income as $key => $income) :
                                    $invoice = $this->db->get_where('invoice', array('invoice_id' => $income['invoice_id']))->row()->patient_id;
                                    ?>                                    
                                    {
                                    "name": "<?php echo $this->db->get_where('patient', array('patient_id' => $invoice))->row()->name;?>",
                                    "steps": <?php echo $income['amount']; ?> ,
                                    "href": "<?php echo base_url();?>uploads/patient_image/<?php echo $invoice . '.jpg';?>"
                                     }, 
                                     <?php endforeach;?>

                                ];

                                var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
                                categoryAxis.dataFields.category = "name";
                                categoryAxis.renderer.grid.template.strokeOpacity = 0;
                                categoryAxis.renderer.minGridDistance = 10;
                                categoryAxis.renderer.labels.template.dy = 35;
                                categoryAxis.renderer.tooltip.dy = 35;

                                var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
                                valueAxis.renderer.inside = true;
                                valueAxis.renderer.labels.template.fillOpacity = 0.3;
                                valueAxis.renderer.grid.template.strokeOpacity = 0;
                                valueAxis.min = 0;
                                valueAxis.cursorTooltipEnabled = false;
                                valueAxis.renderer.baseGrid.strokeOpacity = 0;

                                var series = chart.series.push(new am4charts.ColumnSeries);
                                series.dataFields.valueY = "steps";
                                series.dataFields.categoryX = "name";
                                series.tooltipText = "{valueY.value}";
                                series.tooltip.pointerOrientation = "vertical";
                                series.tooltip.dy = - 6;
                                series.columnsContainer.zIndex = 100;

                                var columnTemplate = series.columns.template;
                                columnTemplate.width = am4core.percent(50);
                                columnTemplate.maxWidth = 66;
                                columnTemplate.column.cornerRadius(60, 60, 10, 10);
                                columnTemplate.strokeOpacity = 0;

                                series.heatRules.push({ target: columnTemplate, property: "fill", dataField: "valueY", min: am4core.color("#e5dc36"), max: am4core.color("#5faa46") });
                                series.mainContainer.mask = undefined;

                                var cursor = new am4charts.XYCursor();
                                chart.cursor = cursor;
                                cursor.lineX.disabled = true;
                                cursor.lineY.disabled = true;
                                cursor.behavior = "none";

                                var bullet = columnTemplate.createChild(am4charts.CircleBullet);
                                bullet.circle.radius = 30;
                                bullet.valign = "bottom";
                                bullet.align = "center";
                                bullet.isMeasured = true;
                                bullet.mouseEnabled = false;
                                bullet.verticalCenter = "bottom";
                                bullet.interactionsEnabled = false;

                                var hoverState = bullet.states.create("hover");
                                var outlineCircle = bullet.createChild(am4core.Circle);
                                outlineCircle.adapter.add("radius", function (radius, target) {
                                    var circleBullet = target.parent;
                                    return circleBullet.circle.pixelRadius + 10;
                                })

                                var image = bullet.createChild(am4core.Image);
                                image.width = 60;
                                image.height = 60;
                                image.horizontalCenter = "middle";
                                image.verticalCenter = "middle";
                                image.propertyFields.href = "href";

                                image.adapter.add("mask", function (mask, target) {
                                    var circleBullet = target.parent;
                                    return circleBullet.circle;
                                })

                                var previousBullet;
                                chart.cursor.events.on("cursorpositionchanged", function (event) {
                                    var dataItem = series.tooltipDataItem;

                                    if (dataItem.column) {
                                        var bullet = dataItem.column.children.getIndex(1);

                                        if (previousBullet && previousBullet != bullet) {
                                            previousBullet.isHover = false;
                                        }

                                        if (previousBullet != bullet) {

                                            var hs = bullet.states.getKey("hover");
                                            hs.properties.dy = -bullet.parent.pixelHeight + 30;
                                            bullet.isHover = true;

                                            previousBullet = bullet;
                                        }
                                    }
                                })

                                }); // end am4core.ready()
                                </script> 
                            
                                <!-- HTML 
                                <div id="chartdiv2" style="height: 300px;"></div> -->

                                <!-- The SECOND ALTERNATIVE COLUMN CHART ENDS HERE  -->


                        </div>
                    </div>
                </div>
                <!-- row -->
                <!-- /row -->


                <div class="row">
                    <div class="col-sm-6">
                        <div class="white-box">
                            <h3 class="box-title m-b-0"><?php echo get_phrase('New Patient List');?></h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th><?php echo get_phrase('Image');?></th>
                                            <th><?php echo get_phrase('Name');?></th>
                                            <th><?php echo get_phrase('Sex');?></th>
                                            <th><?php echo get_phrase('Email');?></th>
                                            <th><?php echo get_phrase('Phone');?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                <?php

                    //Select patients from the patients' table and display only 5 recent
                    $sql = "SELECT * FROM patient order by patient_id desc LIMIT 5";
                    $array_select = $this->db->query($sql)->result_array();
                    foreach ($array_select as $key => $patient):?>
                                        <tr>
                                            <td><img src="<?php echo $this->crud_model->get_image_url('patient', $patient['patient_id']);?>" class="img-circle" height="30px" width="30px"></td>
                                            <td><?php echo $patient['name'];?></td>
                                            <td><?php echo $patient['sex'];?></td>
                                            <td><?php echo $patient['email'];?></td>
                                            <td><?php echo $patient['phone'];?></td>
                                        </tr>
                      <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="white-box">
                            <h3 class="box-title m-b-0"><?php echo get_phrase('Blood Donor');?></h3>
                            <div class="table-responsive">
                            <table class="table">
                                    <thead>
                                    <tr>
                                            <th><?php echo get_phrase('Name');?></th>
                                            <th><?php echo get_phrase('Sex');?></th>
                                            <th><?php echo get_phrase('Phone');?></th>
                                            <th><?php echo get_phrase('Email');?></th>
                                            <th><?php echo get_phrase('Blood');?></th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                   <?php
                                    //Select patients from the donors' table and display only 5 recent
                                    $sql = "SELECT * FROM donor order by donor_id desc LIMIT 5";
                                    $array_select = $this->db->query($sql)->result_array();
                                    foreach ($array_select as $key => $donor):?>
                                        <tr>
                                            <td><?php echo $donor['name'];?></td>
                                            <td><?php echo $donor['sex'];?></td>
                                            <td><?php echo $donor['phone'];?></td>
                                            <td><?php echo $donor['email'];?></td>
                                            <td><?php echo $donor['blood_group'];?></td>
                                        </tr>
                                    <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->