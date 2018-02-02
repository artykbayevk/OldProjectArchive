//
//  SportDetailViewController.swift
//  F#01
//
//  Created by Kamalkhan Artykbayev on 19.04.16.
//  Copyright © 2016 Kamalkhan Artykbayev. All rights reserved.
//

import UIKit

class SportDetailViewController: UIViewController {

    @IBOutlet weak var backImage: UIImageView!
    @IBOutlet weak var infoLabel: UILabel!
    @IBOutlet weak var segmentedControl: SegmentedControl!
    var stringForDevises:String = ""
    var stringForLocation:String = ""
    override func viewDidLoad() {
        super.viewDidLoad()
        segmentedControl.items = ["DEVICES", "LOCATION"]
        segmentedControl.font = UIFont(name: "Avenir-Black", size: 11)
        segmentedControl.borderColor = UIColor(white: 0, alpha: 0.9)
        segmentedControl.selectedIndex = 0
        segmentedControl.addTarget(self, action: "segmentValueChanged:", forControlEvents: .ValueChanged)
        infoLabel?.text = stringForDevises
        backImage.image = UIImage(named: "back")
        let lightBlur = UIBlurEffect(style: UIBlurEffectStyle.Light)
        let blurView = UIVisualEffectView(effect: lightBlur)
        blurView.frame = backImage.bounds
        backImage.addSubview(blurView)
        // Do any additional setup after loading the view.
        
    }
    
    override func preferredStatusBarStyle() -> UIStatusBarStyle {
        
        //LightContent
        return UIStatusBarStyle.LightContent
        
        //Default
        //return UIStatusBarStyle.Default
        
    }

    @IBAction func exit(sender: AnyObject) {
            dismissViewControllerAnimated(true, completion: nil)
    }
    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }
    
    func segmentValueChanged(sender: AnyObject?){
        if segmentedControl.selectedIndex == 0 {
           infoLabel.text = stringForDevises
        }else{
            infoLabel.text = stringForLocation
        }
    }
    /*
    // MARK: - Navigation

    // In a storyboard-based application, you will often want to do a little preparation before navigation
    override func prepareForSegue(segue: UIStoryboardSegue, sender: AnyObject?) {
        // Get the new view controller using segue.destinationViewController.
        // Pass the selected object to the new view controller.
    }
    */
    
}
