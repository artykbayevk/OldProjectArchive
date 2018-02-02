//
//  RegistrationViewController.swift
//  F#01
//
//  Created by Kamalkhan Artykbayev on 18.04.16.
//  Copyright © 2016 Kamalkhan Artykbayev. All rights reserved.
//

import UIKit
import Foundation
import CoreData
class RegistrationViewController: UIViewController {

    var UserReg:User!
    var UserRegList:[User] = []
    var appDelegate: AppDelegate?
    var managedObjectContext: NSManagedObjectContext?
    @IBOutlet weak var passwordReg: UITextField!
    @IBOutlet weak var usernameReg: UITextField!
    @IBOutlet weak var backImage: UIImageView!
    override func viewDidLoad() {
        super.viewDidLoad()
        backImage.image = UIImage(named: "back")
        let lightBlur = UIBlurEffect(style: UIBlurEffectStyle.Light)
        let blurView = UIVisualEffectView(effect: lightBlur)
        blurView.frame = backImage.bounds
        backImage.addSubview(blurView)
        appDelegate = UIApplication.sharedApplication().delegate as? AppDelegate
        managedObjectContext = appDelegate?.managedObjectContext
        // Do any additional setup after loading the view.
    }

    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }
    override func preferredStatusBarStyle() -> UIStatusBarStyle {
        
        //LightContent
        return UIStatusBarStyle.LightContent
        
        //Default
        //return UIStatusBarStyle.Default
        
    }
    

    /*
    // MARK: - Navigation

    // In a storyboard-based application, you will often want to do a little preparation before navigation
    override func prepareForSegue(segue: UIStoryboardSegue, sender: AnyObject?) {
        // Get the new view controller using segue.destinationViewController.
        // Pass the selected object to the new view controller.
    }
    */
    @IBAction func save(sender: AnyObject) {
        let username = usernameReg.text
        let password = passwordReg.text
        
        
        if username == "" || password == "" {
            let alertController = UIAlertController(title: "Oops", message: "We can't proceed because one of the fields is blank. Please note that all fields are required.", preferredStyle: UIAlertControllerStyle.Alert)
            alertController.addAction(UIAlertAction(title: "OK", style: UIAlertActionStyle.Default, handler: nil))
            self.presentViewController(alertController, animated: true, completion: nil)
            
            return
        }else if(username?.characters.count < 6 || password?.characters.count < 6){
            let alertController = UIAlertController(title: "Oops", message: "Username's and Password's length will be more than 6", preferredStyle: UIAlertControllerStyle.Alert)
            alertController.addAction(UIAlertAction(title: "OK", style: UIAlertActionStyle.Default, handler: nil))
            self.presentViewController(alertController, animated: true, completion: nil)
            
            return
        }
        let fetchRequest = NSFetchRequest(entityName: "User")
        do {
            if let result = try managedObjectContext?.executeFetchRequest(fetchRequest) as? [User]{
                if UserRegList != result{
                    UserRegList = result
                }
            }
        }catch{
            print(error)
        }
        
        var count = 0
        
        for i in UserRegList{
            if username == i.username{
                count += 1
            }
        }
        
        if count == 0 {
            if let manageObjectContext = (UIApplication.sharedApplication().delegate as? AppDelegate)?.managedObjectContext{
                UserReg = NSEntityDescription.insertNewObjectForEntityForName("User", inManagedObjectContext: manageObjectContext) as! User
                
                UserReg.username = username
                UserReg.password = password
                do{
                    try manageObjectContext.save()
                    print(UserReg.username)
                    print(UserReg.password)
                } catch {
                    print(error)
                    return
                }
            }
        }else{
                let alertController = UIAlertController(title: "Oops", message: "User with this username was registered", preferredStyle: UIAlertControllerStyle.Alert)
                alertController.addAction(UIAlertAction(title: "OK", style: UIAlertActionStyle.Default, handler: nil))
                self.presentViewController(alertController, animated: true, completion: nil)
                return
            }
        
        dismissViewControllerAnimated(true, completion: nil)
        
    }
}

