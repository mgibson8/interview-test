#Simple interview assignment.

### Prerequisites:
You'll need a (free) Github account, and Git needs to be installed on your development machine.

### How to submit the assignment:
1. Fork this repository with the 'Fork' button in the top right of the Github web interface.
1. Clone your copy of the repository to your local machine. e.g.`git clone ...`
1. Complete the programming assignment described below in the language of your choice.
1. Add your changes with `git add ...`, commit them with `git commit -m ...` and push them to Github with `git push ...`
1. Create a Github 'Pull Request' using the button in the GitHub web interface, on the 'Pull requests' screen.

## The assignment:

In this repository there is a CSV file containing a list of telephone numbers and names.

In the programming language of your choice, you need to:

1. Load this CSV file.
1. Iterate through each row, and then using the Twilio API, make a telephone call to each telephone number in turn.

####Bonus points
1. After calling the number using the Twilio API, have Twilio 'Say' "Hi name", where name is the persons name from the CSV file.

You can use any external packages you need to make this happen, such as Ruby Gems, PIP/easy_install on Python etc.

Good luck!
