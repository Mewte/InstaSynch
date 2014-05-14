				<script>
					global.page.url = "/help.php";
					global.page.title = "InstaSynch - Help & Information";
					global.page.name = "help";
				</script>
				<div class="help-content">
					<div class="help-body">
						<h1>Help</h1>
						<ul>
							<li><a href="#leader">Leader Mode</a></li>
							<li><a href="#polls">Polls</a></li>
							<li><a href="#greynames">"Greynames"</a></li>
							<li><a href="#playlist">Playlist Controls</a></li>
							<li><a href="#moderators">Moderators</a></li>
							<li><a href="#kicksAndBans">Kicks & Bans</a></li>
							<li><a href="#muting">Muting Users</a></li>
							<li><a href="#friends">Friends List</a></li>
							<li><a href="#commands">Useful Commands</a></li>
							<li><a href="#common">Common Issues</a></li>		
						</ul>
						<div class="category">
							<h2 id="leader">Leader Mode</h2>
							<p>
								Any moderator can control the player. To control the player click the "Lead Me" button below the chat. A scrollbar with
								two buttons, Resume and Pause, will appear. To seek to specific portion of the video, click and drag to the desired time.
								To move videos around: drag and drop them to where you want. To play a specific video, click on the video you wish to play.
							</p>
						</div>
						<div class="category">
							<h2 id="polls">Polls</h2>
							<p>
								All moderators can create polls. To create a poll click the "Create Poll" button and fill out the options. Only registered users can vote on polls.
							</p>
						</div>
						<div class="category">
							<h2 id="greynames">"Greynames"</h2>
							<p>
								"Greyname" is nickname for a user who has not registered, but has joined the chat. The only thing greynames can do is
								chat and watch videos. Greynames cannot vote or contribute to the playlist in anyway. All features (voting on polls and skips,
								Profile Image & Bio, adding videos, friends list, and more) require a user to be logged in.
							</p>
						</div>					
						<div class="category">
							<h2 id="polls">Playlist Controls</h2>
							<p>
								The playlist contains various buttons and controls. To add a video, copy and paste the URL into the text box and click add video. 
								To vote to skip, click the Skip button. Next to the skip button is a counter showing how many skips there are and how many are needed to skip the current video.
								If your video is having errors or issues loading, sometimes the reload button can help. Moderators may modify the order of videos by using either
								the 'move command, or by clicking the Lead Me button and manually dragging and dropping the videos to where they want. To remove a video, click the X.
								Clicking the chain link opens a new tab to the URL of that video. Moderators may toggle the playlist lock by clicking the lock button on the playlist. Locked means only moderators may add 
								videos, unlocked means that registered users too can add videos. Once you are comfortable with your playlist, use the 'save command to guarantee
								that it will always be there. At the moment, server restarts will wipe your playlist unless you have used 'save. In the future, this functionality will 
								be automatic. There will also be user savable playlist introduced in the near future.
							</p>
						</div>
						<div class="category">
							<h2 id="moderators">Moderators</h2>
							<p>
								Moderators are created by the room owner to moderate the room. Moderators can do a variety of task including
								banning/kicking users, modifying the playlist. To create moderators, type 'mod followed by the username you wish to mod.
								i.e. 'mod Mewte. To remove a mod type 'demod followed by the username you wish to demod. To view all mods in a room, use 
								the command 'modlist.
							</p>
						</div>
						<div class="category">
							<h2 id="kicksAndBans">Kicks & Bans</h2>
							<p>
								Banning and kicking users can be done by either using the 'ban or 'kick command, or by hovering over the profile of the person you wish
								to kick/ban and clicking the corresponding button. Bans last until lifted using 'unban. To ban a user who has already left the room,
								use 'leaverban. 'leaverban will ban the last user with the given username, however, it only works if they have recently left. 
								Bans are IP based and username based.
							</p>
						</div> 
						<div class="category">
							<h2 id="rooms">Room Settings</h2>
							<p>
								On the settings page you can find various room settings you can modify. The description modifies the text that appears next to you room
								on public listings and the Info is the text that appears at the bottom of your room. There will be more options in the future for you to modify.
							</p>
							<p>
								You can also modify the public listing of your room. By unchecking 'Public', your room will not appear on any page that has room listings.
								In the future there will be invite only and friend only options to allow you to have even more control over your watching experience.
							</p>
						</div>
						<div class="category">
							<h2 id="muting">Muting Users</h2>
							<p>
								You may find at times you'd like to mute an annoying user. To do so, hover over their name and click Mute.
								You'll notice this mutes every user on that users IP. The mute only last until you either A) Unmute them or B) Refresh the page or C) leave the room.
							</p>
						</div>
						<div class="category">
							<h2 id="friends">Friends List</h2>
							<p>
								The friend's list was launched with v1.1 of the site. It is still relatively new and in testing so there's a lot of missing features that will be implemented.
								There's currently a maximum friend count of 50; This will most likely change in the near future, however. To add a friend: Click the +1 button below the friend's list (after expanding it).
								A dialog will appear where you may enter the username of the user you'd like to add. 
							</p>
							<p>
								<strong>(Notice to Adblock users)</strong> Some users have reported missing images such as the 'add-friend' image. Some versions and settings of Adblock may block these images for reasons unknown.
							</p>
						</div>
						<div class="category">
							<h2 id="commands">Useful Commands</h2>
							<p>
								All commands are typed with an apostrophe('). These commands will slowly be replaced with interface items in the near future.
							</p>
							<h3>The following are moderator and room owner commands. Exclude [ and ]</h3>
							<ul>
								<li>
									<h3>'mod [username]</h3>
									<p>
										Mods the user. Requires the user to refresh the page.*
									</p>
								</li>
								<li>
									<h3>'demod [username]</h3>
									<p>
										Removes the user from the moderator list. Requires the user to leave or be kicked to take affect.*
									</p>
								</li>
								<li>
									<h3>'kick [username]</h3>
									<p>
										Removes the user from the room.
									</p>
								</li>
								<li>
									<h3>'ban [username]</h3>
									<p>
										Bans the user from the room.
									</p>
								</li>
								<li>
									<h3>'unban [username]</h3>
									<p>
										Unbans all users with the username given.
									</p>
								</li>
								<li>
									<h3>'leaverban [username]</h3>
									<p>
										Checks a recent list of users who have left, and bans the most recent user with the given username.
									</p>
								</li>
								<li>
									<h3>'clearbans</h3>
									<p>
										Removes all bans.
									</p>
								</li>
								<li>
									<h3>'banlist</h3>
									<p>
										Prints the banlist to the chat.
									</p>
								</li>
								<li>
									<h3>'modlist</h3>
									<p>
										Prints the modlist to the chat.
									</p>
								</li>
								<li>
									<h3>'move [position1] [position2]</h3>
									<p>
										Moves video in position1 to position 2. 'move 1 3 would move the video in position 1 to the video in position 3.
										As an alternative, use the Take Lead button and manually drag and drop the videos to where you want them to be.
									</p>
								</li>
								<li>
									<h3>'purge [username]</h3>
									<p>
										Removes all videos in the playlist added by the given username.
									</p>
								</li>
								<li>
									<h3>'clean</h3>
									<p>
										Removes all videos ABOVE (i.e. already played) the currently playing video.
									</p>
								</li>							
								<li>
									<h3>'setskip [1-100]</h3>
									<p>
										Sets the skip percentage required to skip a video. The number is calculated by the number of registered users in the room.
										If there are 30 registered users and you use 'setskip 50, the required number of skips to skip a video would be 15. 
									</p>
								</li>
								<li>
									<h3>'motd [message]</h3>
									<p>
										Sets the welcome message that users see when first connecting to chat.
									</p>
								</li>
								<li>
									<strong>* Room owner only.</strong>
								</li>
							</ul>
							<h3>All User Commands</h3>
							<ul>
								<li>
									<h3>'toggleautosynch</h3>
									<p>
										Disables auto resynch for videos. This is useful in events where your video is slow to buffer.
									</p>
								</li>
								<li>
									<h3>'togglefilter</h3>
									<p>
										When filter is on, chat from unregistered users will be filtered out.
									</p>
								</li>				
							</ul>
						</div>
						<div class="category">
							<h2 id="common">Common Issues</h2>
							<p>
								There are a variety of issues that some  user may experience from time to time. Most issues can resolve themselves by refreshing the page.
								Other issues may be fixed by clearing your cache then refreshing the page. Some very common issues with the player include occasional error messages
								or videos that fail to buffer. Most of these issues can be resolved by clicking the Reload button or refreshing the page. Sometimes the page may not refresh,
								this can simply be fixed by refreshing the page. Refreshing the page may refresh the page, this can refresh the page while refreshing the page but it won't refresh the page
								if it's already refreshed, but it may leave you feeling refreshed as you relax and wait for it to refresh.
							</p>				
						</div>
					</div>
				</div>