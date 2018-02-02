//
//  LoginViewController.swift
//  F#01
//
//  Created by Kamalkhan Artykbayev on 18.04.16.
//  Copyright © 2016 Kamalkhan Artykbayev. All rights reserved.
//

import UIKit
import CoreData

class LoginViewController: UIViewController {

    var userLog:[User] = []
    
    var usernameCheck:String!
    var passwordCheck:String!
    
    var appDelegate: AppDelegate?
    var managedObjectContext: NSManagedObjectContext?
    @IBOutlet weak var passwordLog: UITextField!
    @IBOutlet weak var usernameLog: UITextField!
    @IBOutlet weak var backImage: UIImageView!
    override func viewDidLoad() {
        super.viewDidLoad()
        backImage.image = UIImage(named: "back")
        let lightBlur = UIBlurEffect(style: UIBlurEffectStyle.Light)
        let blurView = UIVisualEffectView(effect: lightBlur)
        blurView.frame = backImage.bounds
        backImage.addSubview(blurView)
        appDelegate = UIApplication.sharedApplication().delegate as? AppDelegate
        managedObjectContext = appDelegate?.managedObjectContext        // Do any additional setup after loading the view.
    }
    
    func PrepareForSegueSecond(){
        performSegueWithIdentifier("segue", sender: nil)
    }

    override func preferredStatusBarStyle() -> UIStatusBarStyle {
        
        //LightContent
        return UIStatusBarStyle.LightContent
        
        //Default
        //return UIStatusBarStyle.Default
        
    }
    override func prepareForSegue(segue: UIStoryboardSegue, sender: AnyObject?) {
        if segue.identifier=="segue"{
            let barViewControllers = segue.destinationViewController as! UITabBarController
            let nav = barViewControllers.viewControllers![1] as! UINavigationController
            let destinationViewController = nav.topViewController as! UserViewController
            destinationViewController.text = (usernameLog?.text)!
            destinationViewController.pass = (passwordLog?.text)!
            let sec = barViewControllers.viewControllers![2] as! BlogViewController
            sec.person = (usernameLog?.text)!
        }
    }
    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }
    
    @IBAction func login(sender: AnyObject) {
        let fetchRequest = NSFetchRequest(entityName: "User")
        do {
            if let result = try managedObjectContext?.executeFetchRequest(fetchRequest) as? [User]{
                if userLog != result{
                    userLog = result
                }
            }
        }catch{
            print(error)
        }
        for item in userLog{
            if item.username==usernameLog.text && item.password==passwordLog.text{
                usernameCheck=item.username!
                passwordCheck=item.password!
            }
        }
        
        if(usernameLog.text == "" || passwordLog.text == ""){
            let alertForLoginButton = UIAlertView()
            alertForLoginButton.title="Null"
            if (usernameLog.text=="" && passwordLog.text=="") {
                alertForLoginButton.message="Login and Password fiels are empty"
            }else if(usernameLog.text==""){
                alertForLoginButton.message="Login is empty"
            }else{
                alertForLoginButton.message="Password is empty"
            }
            alertForLoginButton.addButtonWithTitle("Okay")
            alertForLoginButton.show()
            dismissViewControllerAnimated(true, completion: nil)
        }
        else if(usernameLog.text == usernameCheck && passwordLog.text == passwordCheck){
            let timerForSegue = NSTimer.scheduledTimerWithTimeInterval(3.5, target: self, selector: "PrepareForSegueSecond", userInfo: nil, repeats: false)
        }else{
            let alertForIncorrect = UIAlertView()
            alertForIncorrect.title = "Incorrect"
            alertForIncorrect.message = "Login or password are incorrect"
            alertForIncorrect.addButtonWithTitle("Okay")
            alertForIncorrect.show()
            dismissViewControllerAnimated(true, completion: nil)
        }
        
        
    }
    
    
    
}

