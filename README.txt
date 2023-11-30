If we talk about the code according to my experience the code is some what a terrible code. I would
start from the basic thing and will go into details in following points:

1) First thing which I would like to mention is the naming convention controller and repository name
should be JobController and JobRepository since it is dealing with job and not bookings

2) Conditions are not written properly for example in the first index function the condition for checking
auth user id and request user id was not correct

3) Then the case are not handled properly like for example in index function there is a conditional properly
where if a user is neither the same user who has requested for the jobs nor the admin or super admin in that case
it should return response as an empty.

4). Then Auth check was not defined properly I have written the correct way of getting auth user.

5). Then in repository the code which is written for validation should handle in request with laravel validations.

6). In db boolean values like immediate in jobs table is declared as string which is not a good practice as
there is always a margin of error in string value.

7). In storeJobEmail the addresses to the data has been passed when there is no use of it.

8). Sub functions are not there alot of conditions are used instead of functions.

9). Then again in baseRepository alot of function as been defined which has no need because laravel
eloquent already provide then these functions are useful it we are working on core php or any other framework which don't
provide eloquent.

//
I have also added two test in Test/Unit
