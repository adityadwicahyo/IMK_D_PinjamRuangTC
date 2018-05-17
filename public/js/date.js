// Get day now
var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!
var yyyy = today.getFullYear();

if(dd<10) {
    dd = '0'+dd
} 

if(mm<10) {
    mm = '0'+mm
} 

today = mm + '-' + dd + '-' + yyyy;
// End of get day now

angular
  .module('app',['flexcalendar', 'pascalprecht.translate'])
  .controller('MainController', ['$scope', function($scope) {
    $scope.options = {
    defaultDate: today,
    minDate: "2018-01-01",
    maxDate: "2018-12-31",
    disabledDates: [
        "2018-01-01",
        "2018-01-02",
        "2018-01-03",
        "2018-01-04",
        "2018-01-05",
        "2018-01-06",
        "2018-01-07",
        "2018-01-08",
        "2018-01-09",
        "2018-01-10",
        "2018-01-11",
        "2018-01-12",
        "2018-01-13",
        "2018-01-14",
        "2018-01-15",
        "2018-01-16",
        "2018-01-17",
        "2018-01-18",
        "2018-01-19",
        "2018-01-20",
        "2018-01-21",
        "2018-01-22",
        "2018-01-23",
        "2018-01-24",
        "2018-01-25",
        "2018-01-26",
        "2018-01-27",
        "2018-01-28",
        "2018-01-29",
        "2018-01-30",
        "2018-01-31",
        "2018-02-01",
        "2018-02-02",
        "2018-02-03",
        "2018-02-04",
        "2018-02-05",
        "2018-02-06",
        "2018-02-07",
        "2018-02-08",
        "2018-02-09",
        "2018-02-10",
        "2018-02-11",
        "2018-02-12",
        "2018-02-13",
        "2018-02-14",
        "2018-02-15",
        "2018-02-16",
        "2018-02-17",
        "2018-02-18",
        "2018-02-19",
        "2018-02-20",
        "2018-02-21",
        "2018-02-22",
        "2018-02-23",
        "2018-02-24",
        "2018-02-25",
        "2018-02-26",
        "2018-02-27",
        "2018-02-28",
        "2018-03-01",
        "2018-03-02",
        "2018-03-03",
        "2018-03-04",
        "2018-03-05",
        "2018-03-06",
        "2018-03-07",
        "2018-03-08",
        "2018-03-09",
        "2018-03-10",
        "2018-03-11",
        "2018-03-12",
        "2018-03-13",
        "2018-03-14",
        "2018-03-15",
        "2018-03-16",
        "2018-03-17",
        "2018-03-18",
        "2018-03-19",
        "2018-03-20",
        "2018-03-21",
        "2018-03-22",
        "2018-03-23",
        "2018-03-24",
        "2018-03-25",
        "2018-03-26",
        "2018-03-27",
        "2018-03-28",
        "2018-03-29",
        "2018-03-30",
        "2018-03-31",
        "2018-04-01",
        "2018-04-02",
        "2018-04-03",
        "2018-04-04",
        "2018-04-05",
        "2018-04-06",
        "2018-04-07",
        "2018-04-08",
        "2018-04-09",
        "2018-04-10",
        "2018-04-11",
        "2018-04-12",
        "2018-04-13",
        "2018-04-14",
        "2018-04-15",
        "2018-04-16",
        "2018-04-17",
        "2018-04-18",
        "2018-04-19",
        "2018-04-20",
        "2018-04-21",
        "2018-04-22",
        "2018-04-23",
        "2018-04-24",
        "2018-04-25",
        "2018-04-26",
        "2018-04-27",
        "2018-04-28",
        "2018-04-29",
        "2018-04-30",
        "2018-05-01",
        "2018-05-02",
        "2018-05-03",
        "2018-05-04",
        "2018-05-05",
        "2018-05-06",
        "2018-05-07",
        "2018-05-08",
        "2018-05-09",
        "2018-05-10",
        "2018-05-11",
        "2018-05-12",
        "2018-05-13",
        "2018-05-14",
        "2018-05-15",
        "2018-05-16",
        // "2018-05-17",

        
        "2018-05-22",
        "2018-05-27",
        "2018-05-13",
        "2018-05-15",
        "2018-05-13"
    ],
    dayNamesLength: 1, // 1 for "M", 2 for "Mo", 3 for "Mon"; 9 will show full day names. Default is 1.
    mondayIsFirstDay: true,//set monday as first day of week. Default is false
    eventClick: function(date) {
      console.log(date);
    },
    dateClick: function(date) {
      console.log(date);
    },
    changeMonth: function(month, year) {
      console.log(month, year);
    },
  };

  $scope.events = [
    // {foo: 'bar', date: "2015-04-13"},
    // {foo: 'bar', date: "2015-08-20"}
  ];
}])

// Library
!function(){"use strict";function e(){var e='<div class="flex-calendar"><div class="month"><div class="arrow {{arrowPrevClass}}" ng-click="prevMonth()"></div><div class="label">{{ selectedMonth | translate }} {{selectedYear}}</div><div class="arrow {{arrowNextClass}}" ng-click="nextMonth()"></div></div><div class="week"><div class="day" ng-repeat="day in weekDays(options.dayNamesLength) track by $index">{{ day }}</div></div><div class="days" ng-repeat="week in weeks"><div class="day"ng-repeat="day in week track by $index"ng-class="{selected: isDefaultDate(day), event: day.event[0], disabled: day.disabled, out: !day}"ng-click="onClick(day, $index, $event)"><div class="number">{{day.day}}</div></div></div></div>',a={restrict:"E",scope:{options:"=?",events:"=?"},template:e,controller:t};return a}function t(e,t){function a(){e.mappedDisabledDates=e.options.disabledDates.map(function(e){return new Date(e)})}function n(){e.mappedEvents=e.events.map(function(e){return e.date=new Date(e.date),e})}function o(t,a,n){t&&!t.disabled&&(e.options.defaultDate=t.date,0!=t.event.length?e.options.eventClick(t,n):e.options.dateClick(t,n))}function s(t){t&&e.mappedEvents&&(t.event=[],e.mappedEvents.forEach(function(e){t.date.getFullYear()===e.date.getFullYear()&&t.date.getMonth()===e.date.getMonth()&&t.date.getDate()===e.date.getDate()&&t.event.push(e)}))}function i(t){if(!e.options.minDate&&!e.options.maxDate)return!0;var a=t.date;return e.options.minDate&&a<e.options.minDate?!1:e.options.maxDate&&a>e.options.maxDate?!1:!0}function d(t){if(!e.mappedDisabledDates)return!1;for(var a=0;a<e.mappedDisabledDates.length;a++)if(t.year===e.mappedDisabledDates[a].getFullYear()&&t.month===e.mappedDisabledDates[a].getMonth()&&t.day===e.mappedDisabledDates[a].getDate())return!0}function l(){var t=null,a=null;if(!e.options.minDate)return!0;var n=M.indexOf(e.selectedMonth);return 0===n?(t=e.selectedYear-1,a=11):(t=e.selectedYear,a=n-1),t<e.options.minDate.getFullYear()?!1:t===e.options.minDate.getFullYear()&&a<e.options.minDate.getMonth()?!1:!0}function r(){var t=null,a=null;if(!e.options.maxDate)return!0;var n=M.indexOf(e.selectedMonth);return 11===n?(t=e.selectedYear+1,a=0):(t=e.selectedYear,a=n+1),t>e.options.maxDate.getFullYear()?!1:t===e.options.maxDate.getFullYear()&&a>e.options.maxDate.getMonth()?!1:!0}function c(){e.weeks=[];for(var t=null,a=new Date(e.selectedYear,M.indexOf(e.selectedMonth)+1,0).getDate(),n=1;a+1>n;n+=1){var o=new Date(e.selectedYear,M.indexOf(e.selectedMonth),n),l=new Date(e.selectedYear,M.indexOf(e.selectedMonth),n).getDay();e.options.mondayIsFirstDay&&(l=(l+6)%7),t=t||[null,null,null,null,null,null,null],t[l]={year:e.selectedYear,month:M.indexOf(e.selectedMonth),day:n,date:o,_month:o.getMonth()+1},i(t[l])?e.mappedEvents&&s(t[l]):t[l].disabled=!0,t[l]&&d(t[l])&&(t[l].disabled=!0),(6===l||n===a)&&(e.weeks.push(t),t=void 0)}e.arrowPrevClass=e.allowedPrevMonth()?"visible":"hidden",e.arrowNextClass=e.allowedNextMonth()?"visible":"hidden"}function D(){e.options._defaultDate=e.options.defaultDate?new Date(e.options.defaultDate):new Date,e.selectedYear=e.options._defaultDate.getFullYear(),e.selectedMonth=M[e.options._defaultDate.getMonth()],e.selectedDay=e.options._defaultDate.getDate(),c()}function p(){if(e.mappedDisabledDates&&0!==e.mappedDisabledDates.length){for(var t=0;t<e.mappedDisabledDates.length;t++)e.mappedDisabledDates[t]=new Date(e.mappedDisabledDates[t]);c()}}function u(e){return g.map(function(t){return m(t).slice(0,e)})}function v(t){if(t){var a=t.year===e.options._defaultDate.getFullYear()&&t.month===e.options._defaultDate.getMonth()&&t.day===e.options._defaultDate.getDate();return a}}function f(){if(e.allowedPrevMonth()){var t=M.indexOf(e.selectedMonth);0===t?(e.selectedYear-=1,e.selectedMonth=M[11]):e.selectedMonth=M[t-1];var a={name:e.selectedMonth,index:t-1,_index:t+2};e.options.changeMonth(a,e.selectedYear),c()}}function h(){if(e.allowedNextMonth()){var t=M.indexOf(e.selectedMonth);11===t?(e.selectedYear+=1,e.selectedMonth=M[0]):e.selectedMonth=M[t+1];var a={name:e.selectedMonth,index:t+1,_index:t+2};e.options.changeMonth(a,e.selectedYear),c()}}e.days=[],e.options=e.options||{},e.events=e.events||[],e.options.dayNamesLength=e.options.dayNamesLength||1,e.options.mondayIsFirstDay=e.options.mondayIsFirstDay||!1,e.onClick=o,e.allowedPrevMonth=l,e.allowedNextMonth=r,e.weekDays=u,e.isDefaultDate=v,e.prevMonth=f,e.nextMonth=h,e.arrowPrevClass="visible",e.arrowNextClass="visible";var m=t("translate"),M=["JANUARY","FEBRUARY","MARCH","APRIL","MAI","JUNE","JULY","AUGUST","SEPTEMBER","OCTOBER","NOVEMBER","DECEMBER"],g=["SUNDAY","MONDAY","TUESDAY","WEDNESDAY","THURSDAY","FRIDAY","SATURDAY"];if(e.options.mondayIsFirstDay){var y=g.shift();g.push(y)}e.options.minDate&&(e.options.minDate=new Date(e.options.minDate)),e.options.maxDate&&(e.options.maxDate=new Date(e.options.maxDate)),e.options.disabledDates&&a(),e.events&&n(),e.$watch("options.defaultDate",function(){D()}),e.$watch("options.disabledDates",function(){a(),p()}),e.$watch("events",function(){n(),c()})}angular.module("flexcalendar",[]).directive("flexCalendar",e),t.$inject=["$scope","$filter"]}();