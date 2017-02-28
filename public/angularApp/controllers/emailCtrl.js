/**
 * Created by philr on 27/02/2017.
 */
app.controller('contributeCtrl', function ($scope, $http, $timeout) {
    $scope.result = 'hidden';
    $scope.resultMessage;
    $scope.formData; //formData is an object holding the name, email, and message
    $scope.submitButtonHidden = false;
    $scope.progressMessageShowing = false;
    $scope.resultShowing = false;
    $scope.submitted = false; //used so that form errors are shown only after the form has been submitted
    $scope.submit = function (submittedForm) {
        $scope.submitted = true;
        $scope.submitButtonHidden = true;
        $scope.progressMessageShowing = true;
        if (submittedForm.$valid) {
            $http({
                method: 'POST',
                url: 'api/send',
                data: $.param($scope.formData),  //param method from jQuery
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}  //set the headers so angular passing info as form data (not request payload)
            }).success(function (data) {
                //console.log(data); //debugging
                if (data.success) { //success comes from the return json object
                    $scope.submitButtonHidden = true;
                    $scope.progressMessageShowing = false;
                    // $scope.resultMessage = "Success!";
                    // $scope.result = 'bg-success';
                    $scope.resultShowing = true;

                    // $scope.contributeForm.$setPristine(); //Not working
                    //Paused after success
                    $timeout(function(){
                        $scope.formData = {};
                        $scope.submitButtonHidden = false;
                        $scope.progressMessageShowing = false;
                        $scope.resultShowing = false;

                    },2000);

                } else {
                    $scope.submitButtonHidden = false;
                    $scope.progressMessageShowing = false;
                    $scope.resultMessage = "Uh Oh! Something went wrong. Please try again";
                    $scope.result = 'bg-danger';
                }
            });
        } else {
            $scope.submitButtonHidden = false;
            $scope.resultMessage = 'Failed <img src="http://www.chaosm.net/blog/wp-includes/images/smilies/icon_sad.gif" alt=":(" class="wp-smiley">  Please fill out all the fields.';
            $scope.result = 'bg-danger';
        }

    }

});
