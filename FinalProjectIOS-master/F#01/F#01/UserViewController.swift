//
//  UserViewController.swift
//  F#01
//
//  Created by Kamalkhan Artykbayev on 19.04.16.
//  Copyright © 2016 Kamalkhan Artykbayev. All rights reserved.
//

import UIKit

class UserViewController: UIViewController {

    @IBOutlet weak var passwordLabel: UILabel!
    @IBOutlet weak var usernameLabel: UILabel!
    @IBOutlet weak var backImage: UIImageView!
    @IBOutlet weak var labelForName: UILabel!
    var text:String = ""
    var pass:String = ""
    
    override func viewDidLoad() {
        super.viewDidLoad()
        labelForName?.text = "Welcome " + text
        passwordLabel?.text = pass
        usernameLabel?.text = text
        backImage.image = UIImage(named: "back")
        let lightBlur = UIBlurEffect(style: UIBlurEffectStyle.Light)
        let blurView = UIVisualEffectView(effect: lightBlur)
        blurView.frame = backImage.bounds
        backImage.addSubview(blurView)
        // Do any additional setup after loading the view.
    }

    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }
    

    /*
    // MARK: - Navigation

    // In a storyboard-based application, you will often want to do a little preparation before navigation
    override func prepareForSegue(segue: UIStoryboardSegue, sender: AnyObject?) {
        // Get the new view controller using segue.destinationViewController.
        // Pass the selected object to the new view controller.
    }
    */
    override func prepareForSegue(segue: UIStoryboardSegue, sender: AnyObject?) {
        if segue.identifier=="blogSegue"{
            let DestViewController = segue.destinationViewController as! UINavigationController
            let targetController = DestViewController.topViewController as! AddBlogViewController
            targetController.name = text
        }
    }
    
    @IBAction func logout(sender: AnyObject) {
        dismissViewControllerAnimated(true, completion: nil)
        
    }
    
    @IBAction func unwindSegueForBlog(segue: UIStoryboardSegue){
        
    }
}
